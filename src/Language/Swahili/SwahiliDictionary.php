<?php
namespace NumberToWords\Language\Swahili;
use NumberToWords\Language\Dictionary;

class SwahiliDictionary implements Dictionary
{
    const LOCALE               = 'swa';
    const LANGUAGE_NAME        = 'Swahili';
    const LANGUAGE_NAME_NATIVE = 'Swahili';

    private static $units = [
      0 => '',
      1 => 'moja',
      2 => 'mbili',
      3 => 'tatu',
      4 => 'nne',
      5 => 'tano',
      6 => 'sita',
      7 => 'saba',
      8 => 'nane',
      9 => 'tisa'
    ];

    private static $teens = [
        0 => 'kumi',
        1 => 'kumi na moja',
        2 => 'kumi na mbili',
        3 => 'kumi na tatu',
        4 => 'kumi na nne',
        5 => 'kumi na tano',
        6 => 'kumi na sita',
        7 => 'kumi na saba',
        8 => 'kumi na nane',
        9 => 'kumi na tisa'
    ];

    private static $tens = [
        0 => '',
        1 => 'kumi',
        2 => 'ishirini',
        3 => 'thalathini',
        4 => 'arobaini',
        5 => 'hamsini',
        6 => 'sitini',
        7 => 'sabini',
        8 => 'themanini',
        9 => 'tisini'
    ];

    private static $hundrends = [
        0 => 'mia',
        1 => 'mia moja',
        2 => 'mia mbili',
        3 => 'mia tatu',
        4 => 'mia nne',
        5 => 'mia tano',
        6 => 'mia sita',
        7 => 'mia saba',
        8 => 'mia nane',
        9 => 'mia tisa'
    ];

    //majina za fulusi
    // research ongoing :)
    public static $currencyNames = [
        'ALL' => [['lek'], ['qindarka']],
        'AUD' => [['dollar ya Australian'], ['senti']],
        'BAM' => [['convertible marka'], ['fenig']],
        'BGN' => [['lev'], ['stotinka']],
        'BRL' => [['real'], ['centavos']],
        'BYR' => [['Belarussian rouble'], ['kopiejka']],
        'CAD' => [['Canadian dollar'], ['senti']],
        'CHF' => [['Swiss franc'], ['rapp']],
        'CYP' => [['Cypriot pound'], ['senti']],
        'CZK' => [['Czech koruna'], ['halerz']],
        'DKK' => [['Danish krone'], ['ore']],
        'EEK' => [['kroon'], ['senti']],
        'EUR' => [['euro'], ['euro-cent']],
        'GBP' => [['pauni', 'pauni'], ['pence', 'pence']],
        'HKD' => [['Hong Kong dola'], ['senti']],
        'HRK' => [['Croatian kuna'], ['lipa']],
        'HUF' => [['forint'], ['filler']],
        'ILS' => [['new sheqel', 'new sheqels'], ['agora', 'agorot']],
        'ISK' => [['Icelandic króna'], ['aurar']],
        'JPY' => [['yen'], ['sen']],
        'LTL' => [['litas'], ['senti']],
        'LVL' => [['lat'], ['sentim']],
        'MKD' => [['Macedonian dinar'], ['deni']],
        'MTL' => [['Maltese lira'], ['centym']],
        'NOK' => [['Norwegian krone'], ['oere']],
        'PLN' => [['zloty', 'zlotys'], ['grosz']],
        'ROL' => [['Romanian leu'], ['bani']],
        'RUB' => [['Russian Federation rouble'], ['kopiejka']],
        'SEK' => [['Swedish krona'], ['oere']],
        'SIT' => [['Tolar'], ['stotinia']],
        'SKK' => [['Slovak koruna'], []],
        'TMT' => [['manat'], ['tenge']],
        'TRL' => [['lira'], ['kuruş']],
        'UAH' => [['hryvna'], ['senti']],
        'USD' => [['dola'], ['senti']],
        'YUM' => [['dinars'], ['para']],
        'ZAR' => [['rand'], ['senti']],
        'PHP' => [['peso'], ['centavo']]
    ];

    /**
     * @return string
     */

    public function getZero()
    {
        return 'Sufuri';
    }

    /**
     * @return string
     */
    public function getMinus()
    {
        return 'Kuondoa';
    }

    /**
     * @param int $unit
     *
     * @return string
     */
    public function getCorrespondingUnit($unit)
    {
        return self::$units[$unit];
    }

    /**
     * @param int $teen
     *
     * @return string
     */
    public function getCorrespondingTeen($teen)
    {
        return self::$teens[$teen];
    }

    /**
     * @param int $ten
     *
     * @return string
     */
    public function getCorrespondingTen($ten)
    {
       return self::$tens[$ten];
    }

    /**
     * @param int $hundred
     *
     * @return string
     */
    public function getCorrespondingHundred($hundred)
    {
        return self::$hundrends[$hundred];
    }
}