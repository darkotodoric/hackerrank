<?php

/**
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