<?php

namespace App\Services;

use App\Enums\FileUploadType;

class FileUploadContext
{
    private \fileUploadStrategyInterface $strategy;

    public function __construct(FileUploadType $type){
        $this->strategy = FileUploadStrategyFactory::make($type);
    }

    public function upload( $file, string $path): string
    {
        return $this->strategy->upload($file, $path);
    }
}
