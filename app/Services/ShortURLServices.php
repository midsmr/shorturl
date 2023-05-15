<?php

namespace App\Services;

class ShortURLServices
{
    private static string $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    private static int $scale = 62;

    public static function encode(int $id): string
    {
        $result = '';

        while ($id > self::$scale - 1) {
            $remainder = (int)$id % self::$scale;
            $result = $result . substr(self::$chars, $remainder, 1);
            $id = $id / self::$scale;
        }
        $result = $result . substr(self::$chars, (int)$id, 1);
        return strrev($result);
    }

    public static function decode(string $value)
    {
        $value = ltrim($value, '0');
        $id = 0;
        for ($i = 0; $i < strlen($value); $i++) {
            $index = strpos(self::$chars, substr($value, $i, 1));
            $id = $id + (int)($index * pow(self::$scale, strlen($value) - $i - 1));
        }

        return $id;
    }
}
