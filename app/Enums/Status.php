<?php

namespace App\Enums;

enum Status: string
{
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

    public static function options(): array
    {
        return array_map(fn($case) => [
            'value' =>$case->value,
            'label' => $case->label(),
        ], self::cases()); 
    }

    public static function values(): array 
    {
        return array_column(self::cases(), 'value'); 
    }
}