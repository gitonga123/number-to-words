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
        $tens = (int) ($number / 10) % 10;
        $hundrends = (int) ($number / 100) % 10;

        if ($hundrends > 0) {
            $words[] = $this->dictionary->getCorrespondingHundred($hundrends);
        }

        if ($tens !== 0 || $units !== 0) {
            $words[] = $this->getSubHundred($tens, $units);
        }

    }

    private function getSubHundred($tens, $units)
    {
        $words = [];
        if ($tens === 1) {
            $words[] = $this->dictionary->getCorrespondingTeen($units);
        } else {
            if ($tens > 0) {
                $words[] = $this->dictionary->getCorrespondingTen($tens);
            }
            if ($units > 0) {
                $words[] = $this->dictionary->getCorrespondingUnit($units);
            }
        }
        return implode('-', $words);
    }
}