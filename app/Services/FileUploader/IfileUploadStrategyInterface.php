<?php

use Illuminate\Http\UploadedFile;

interface IfileUploadStrategyInterface{
    public function upload(UploadedFile $file, string $path = ''): string;
}