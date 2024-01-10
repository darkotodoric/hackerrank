<?php

/**
 * https://www.hackerrank.com/challenges/beautiful-days-at-the-movies/problem
 *
 * @param int $i
 * @param int $j
 * @param int $k
 * @return int
 */
function beautifulDays(int $i, int $j, int $k): int
{
    $beautifulDays = 0;

    foreach (range($i, $j) as $day) {
        $reversedDay = strrev($day);
        if (!is_float((abs($reversedDay - $day)) / $k)) {
            $beautifulDays++;
        }
    }

    return $beautifulDays;
}