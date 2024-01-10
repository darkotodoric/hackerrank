<?php

/**
 * https://www.hackerrank.com/challenges/divisible-sum-pairs/problem
 *
 * @param int $n
 * @param int $k
 * @param array $ar
 *
 * @return int
 */
function divisibleSumPairs(int $n, int $k, array $ar): int
{
    $counter = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i != $j) {
                if (($ar[$i] + $ar[$j]) == $k || (abs($ar[$i] + $ar[$j]) % $k) == 0) {
                    $counter++;
                }
            }
        }
    }
    return abs($counter / 2);
}