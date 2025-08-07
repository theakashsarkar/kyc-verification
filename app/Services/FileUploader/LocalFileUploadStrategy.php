<?php

use Illuminate\Http\UploadedFile;

class LocalFileUploadStrategy implements IfileUploadStrategyInterface
{
    public function upload(UploadedFile $file, string $path = ''): string
    {
        return $file->store($path, 'public');
    }
}