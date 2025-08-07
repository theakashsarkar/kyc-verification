<?php 
namespace App\Dtos;

use Illuminate\Http\UploadedFile;

class KycData
{
    public function __construct(
        public readonly string $full_name,
        public readonly string $nid_number,
        public readonly string $dob,
        public readonly string $address,
        public readonly UploadedFile $nid_front,
        public readonly UploadedFile $nid_back,
        public readonly UploadedFile $selfie,
    ) {}
}