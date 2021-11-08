<?php
namespace src\Vehicule;

class Speedometer
{
    public const CONVERT_IN_KM = 1.6;
    public const CONVERT_IN_MILE = 0.6215;


    public static function convertMilesInKm(int $length): int
    {
        return $length * self::CONVERT_IN_KM;
    }
    public static function convertKMInMiles(int $length): int
    {
        return $length * self::CONVERT_IN_MILE;
    }
}