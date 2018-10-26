<?php

namespace NumberToWords\Language\Swahili;


use NumberToWords\Language\ExponentGetter;

class SwahiliExponentGetter implements ExponentGetter
{
    private static $exponent = [
        '',
        'elfu',
        'millioni',
        'billioni',
        'trillioni',
        'quadrillioni',
        'quintillion',
        'sextillion',
        'septillion',
        'octillion',
        'nonillion',
        'decillion',
        'undecillion',
        'duodecillion',
        'tredecillion',
        'quattuordecillion',
        'quindecillion',
        'sexdecillion',
        'septendecillion',
        'octodecillion',
        'novemdecillion',
        'vigintillion',
    ];

    public function getExponent($power)
    {
        return self::$exponent[$power];
    }
}