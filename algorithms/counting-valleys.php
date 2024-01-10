<?php

/**
 * https://www.hackerrank.com/challenges/counting-valleys/problem
 *
 * @param int $steps
 * @param string $path
 *
 * @return int
 */
function countingValleys(int $steps, string $path): int
{
    $level = 0;
    $valley = 0;

    for ($x = 0; $x < $steps; $x++) {
        if ($path[$x] == 'D') {
            $valley += ($level == 0 ? 1 : 0);
            $level--;
        } else {
            $level++;
        }
    }

    return $valley;
}