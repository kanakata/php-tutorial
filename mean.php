<?php
declare(strict_types=1);

//this function calculates the mean of an array of numbers.
function mean(array $frequencies): float
{

    $sumOfFrequencies = 0;
    for ($i = 0; $i <= (count($frequencies) - 1); $i++) {
        $sumOfFrequencies = $sumOfFrequencies + $frequencies[$i];
    }

    $mean = (float) number_format(($sumOfFrequencies / count($frequencies)), 2, ".", ",");
    return $mean;
}

echo mean([10,20]);
