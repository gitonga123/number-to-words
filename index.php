<?php
use NumberToWords\NumberToWords;

$numberToWords = new NumberToWords();

$numberTransformer = $numberToWords->getNumberTransformer('en');
$numberTransformer->toWords(5120);
