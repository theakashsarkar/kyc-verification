<?php

namespace App\Services;

use App\Dtos\KycData;
use App\Models\Kyc;
use App\Services\FileUploader\IFileUpload;
use App\Services\FileUploader\LocalFileUploadStrategy;

class KycVerificationService
{
    protected  IFileUpload $uploadStrategy;
    public function __construct(){
        $this->uploadStrategy = new LocalFileUploadStrategy();
    }

    public function create(KycData $data){
        $directory = "kyc/{$data->user_id}";
        $nidFrontPath = $this->uploadStrategy->upload($data->nid_front,$directory);
        $nidBackPath = $this->uploadStrategy->upload($data->nid_back, $directory);
        $selfiPath = $this->uploadStrategy->upload($data->selfie, $directory);

        return Kyc::create([
            'user_id' => $data->user_id,
            'full_name' => $data->full_name,
            'nid_number' => $data->nid_number,
            'dob' => $data->dob,
            'address' => $data->address,
            'nid_front' => $nidFrontPath,
            'nid_back' => $nidBackPath,
            'selfie' => $selfiPath,
        ]);
    }

    public function getKycDataForUser(int $userId): KycData
    {
        $kycModel = Kyc::where('user_id', $userId)->firstOrFail();
        return new KycData(
            user_id: $kycModel->user_id,
            full_name: $kycModel->full_name,
            nid_number: $kycModel->nid_number,
            dob: $kycModel->dob,
            address: $kycModel->address,
            nid_front: $kycModel->nid_front,
            nid_back: $kycModel->nid_back,
            selfie: $kycModel->selfie,
        );
    }
}
