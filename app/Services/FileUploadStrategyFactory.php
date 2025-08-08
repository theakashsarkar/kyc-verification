<?php

namespace App\Services;
use App\Enums\FileUploadType;
use fileUploadStrategyInterface;
use http\Exception\InvalidArgumentException;
use LocalFileUploadStrategy;

class FileUploadStrategyFactory
{
    public static function make(FileUploadType $type): fileUploadStrategyInterface
    {
        return match ($type) {
            FileUploadType::LOCAL => new LocalFileUploadStrategy(),
            default => throw new InvalidArgumentException()
        };
    }
}
