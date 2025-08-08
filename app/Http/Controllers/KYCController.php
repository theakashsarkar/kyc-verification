<?php

namespace App\Http\Controllers;
use App\Dtos\KycData;
use App\Http\Requests\StoreKYCRequest;
use App\Models\Kyc;
use App\Services\KycVerificationService;
use Illuminate\Http\Request;


class KYCController extends Controller
{
    public function __construct(private KycVerificationService $service){}

    public function showForm()
    {
        return view('kyc.form');
    }

    public function submit(StoreKYCRequest $request)
    {
        $kycData = new KycData(
            user_id: auth()->id(),
            full_name: $request->input('full_name'),
            nid_number: $request->input('nid_number'),
            dob: $request->input('dob'),
            address: $request->input('address'),
            nid_front: $request->file('nid_front'),
            nid_back: $request->file('nid_back'),
            selfie: $request->file('selfie')
        );
        $kyc = $this->service->create($kycData);
        return "hoicha";
    }

    public function status()
    {
//        dd(auth()->id());
        $kycView = $this->service->getKycDataForUser(1);
//        dd($kycView);

        return view('kyc.status', ['kycView' => $kycView]);
    }


}
