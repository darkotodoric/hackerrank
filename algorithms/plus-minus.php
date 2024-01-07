<?php

/**
 * @param array $arr
 *
 * @return void
 */
function plusMinus(array $arr)
{
    $total = count($arr);
    $totalPositive = 0;
    $totalNegative = 0;
    $totalZero = 0;

    foreach ($arr as $value) {
        if ($value > 0) {
            $totalPositive++;
        } elseif ($value < 0) {
            $totalNegative++;
        } else {
            $totalZero++;
        }
    }

    // Decimals
    $positiveDecimal = floatval($totalPositive / $total);
    $negativeDecimal = floatval($totalNegative / $total);
    $zeroDecimal = floatval($totalZero / $total);

    // Formatted
    $positiveFormatted = number_format($positiveDecimal, 6, '.', '');
    $negativeFormatted = number_format($negativeDecimal, 6, '.', '');
    $zeroFormatted = number_format($zeroDecimal, 6, '.', '');

    echo $positiveFormatted . "\n" . $negativeFormatted . "\n" . $zeroFormatted . "\n";
}