<?php

/**
 * https://www.hackerrank.com/challenges/the-hurdle-race/problem
 *
 * @param int $k
 * @param array $height
 *
 * @return int
 */
function hurdleRace(int $k, array $height): int
{
    $maxHeight = max($height);
    if ($k >= $maxHeight) {
        return 0;
    }

    return $maxHeight - $k;
}