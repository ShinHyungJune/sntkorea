<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2021-01-31
 * Time: 오후 4:04
 */

namespace App\Enums;


final class DeviceStatus
{
    const DOWN = "DOWN";
    const UP = "UP";
    const WARNING = "WARNING";
    const CRITICAL = "CRITICAL";

    public static function getOptions()
    {
        return [self::DOWN, self::UP, self::WARNING, self::CRITICAL];
    }
}
