<?php

namespace App\Enums;

use App\Traits\HasEnumHelpers;

enum Status: string
{
    use HasEnumHelpers;
    case Pending  = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';

    public function label(): string
    {
        return match ($this) {
            self::Pending   => 'pending',
            self::Approved  => 'approved',
            self::Rejected  => 'rejected',
        };
    }

}
