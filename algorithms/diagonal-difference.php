<?php

/**
 * https://www.hackerrank.com/challenges/diagonal-difference/problem
 *
 * @param array $arr
 *
 * @return int
 */
function diagonalDifference(array $arr): int
{
    $length = count($arr);
    $leftSum = 0;
    $rightSum = 0;

    for ($x = 0; $x < $length; $x++) {
        $leftSum += $arr[$x][$x];
        $rightSum += $arr[$x][$length - 1 - $x];
    }

    return abs($leftSum - $rightSum);
}