<?php

namespace Faker\Provider\es_CL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+56 9## ## ####',
        '+56 9## ######',
        '+56 9########',
        '+56 9##-##-####',
        '+56 9##-######',
        '9## ## ####',
        '9## ######',
        '9########',
        '9##-##-####',
        '9##-######',
    );

    protected static array $mobileFormats = array(
        '+56 9## ## ####',
        '+56 9## ######',
        '+569########',
        '+56 9##-##-####',
        '+56 9##-######',
    );

    protected static array $tollFreeFormats = array(
        '800 ### ###',
    );

    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function tollFreeNumber(): string
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
