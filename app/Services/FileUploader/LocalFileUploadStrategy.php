<?php

namespace App\Services\FileUploader;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class LocalFileUploadStrategy implements IFileUpload
{
    public function upload(UploadedFile $file, string $path = ''): string
    {
        return $file->store($path, 'public');
    }
}
