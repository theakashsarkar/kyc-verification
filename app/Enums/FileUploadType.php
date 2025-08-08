<?php

namespace App\Enums;

use App\Traits\HasEnumHelpers;

enum FileUploadType:string
{
    use HasEnumHelpers;
    case LOCAL = 'local';
    case S3 = 's3';
}
