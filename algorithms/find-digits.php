<?php

/**
 * https://www.hackerrank.com/challenges/find-digits/problem
 *
 * @param int $n
 *
 * @return int
 */
function findDigits(int $n): int
{
    $count = 0;
    foreach (str_split($n) as $value) {
        if ($value != 0 && ($n % $value) == 0) {
            $count++;
        }
    }

    return $count;
}