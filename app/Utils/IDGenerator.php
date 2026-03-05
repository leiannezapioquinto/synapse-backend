<?php

namespace App\Utils;

use App\Constants\Resource;

class IdGenerator
{
    public static function generate(string $prefix, int $length = Resource::MIN_RANDOM_ALPHANUMERIC_LENGTH): string
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);

        $length = max($length, 6);

        $id = '';

        for ($i = 0; $i < $length; $i++) {
            $id .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $prefix . '_' . $id;
    }
}
