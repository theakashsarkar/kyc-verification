<?php
namespace App\Dtos;

use Illuminate\Http\UploadedFile;

class KycData
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $full_name,
        public readonly string $nid_number,
        public readonly string $dob,
        public readonly string $address,
        public readonly UploadedFile|string $nid_front,
        public readonly UploadedFile|string $nid_back,
        public readonly UploadedFile|string $selfie,
        public readonly ?string $status = 'pending',
    ) {}
}
