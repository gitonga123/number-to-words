<?php

namespace NumberToWords\NumberTransformer;

use NumberToWords\Language\Swahili\SwahiliDictionary;
use NumberToWords\Language\Swahili\SwahiliExponentGetter;
use NumberToWords\Language\Swahili\SwahiliTripletTransformer;
use NumberToWords\Service\NumberToTripletsConverter;

class SwahiliNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */

    public function toWords($number)
    {
        $dictionary = new SwahiliDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new SwahiliTripletTransformer();
        $exponentInflector = new SwahiliExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();
        return $numberTransformer->toWords($number);
    }
}