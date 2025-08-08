<?php

namespace App\Traits;

trait HasEnumHelpers
{
    public static  function options(): array {
        return array_map(
            fn ($case) => [
                'value' => $case->value,
                'label' => $case->label(),
            ],
            self::cases()
        );
    }

    public static function values (): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function labels(): array
    {
        return array_map(
            fn ($case) => $case->label(), self::cases()
        );
    }

    public static function toSelectArray(): array
    {
        return array_column(self::options(), 'lable', 'value');
    }

}
