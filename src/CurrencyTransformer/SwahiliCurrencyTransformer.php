<?php
/**
 * Created by PhpStorm.
 * User: otbafrica
 * Date: 26/10/18
 * Time: 13:35
 */

namespace NumberToWords\CurrencyTransformer;
use NumberToWords\CurrencyTransformer;
use NumberToWords\Legacy\Numbers\Words;

class SwahiliCurrencyTransformer implements CurrencyTransformer
{

    /**
     * @param int    $amount
     * @param string $currency
     *
     *
     * @return string
     */
    public function toWords($amount, $currency)
    {
        $converter = new Words();

        return $converter->transformToCurrency($amount, 'swa', $currency);
    }
}