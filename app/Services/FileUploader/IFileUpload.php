<?php

namespace App\Services\FileUploader;

use Illuminate\Http\UploadedFile;

interface IFileUpload
{
    public function upload(UploadedFile $file, string $path):string;
}
