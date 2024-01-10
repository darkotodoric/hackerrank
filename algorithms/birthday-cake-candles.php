<?php

/**
 * https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 *
 * @param array $candles
 *
 * @return int
 */
function birthdayCakeCandles(array $candles): int
{
    $max = max($candles);
    $count = array_count_values($candles);

    return $count[$max];
}