<?php

/**
 * https://www.hackerrank.com/challenges/equality-in-a-array/problem
 *
 * @param array $arr
 *
 * @return int
 */
function equalizeArray(array $arr): int
{
    $frequency = array_count_values($arr);
    $maxFrequency = max($frequency);

    return count($arr) - $maxFrequency;
}