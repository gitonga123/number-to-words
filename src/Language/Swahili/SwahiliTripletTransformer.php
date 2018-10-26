<?php
namespace NumberToWords\Language\Swahili;
use NumberToWords\Language\TripletTransformer;
class SwahiliTripletTransformer extends TripletTransformer
{
    private $dictionary;

    public function __construct(SwahiliDictionary $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    public function transformToWords($number) {
        $units = $number % 10;
        $tens = 
    }

}