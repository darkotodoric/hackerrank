<?php

/**
 * https://www.hackerrank.com/challenges/compare-the-triplets/problem
 *
 * @param array $a
 * @param array $b
 *
 * @return array
 */
function compareTriplets(array $a, array $b): array
{
    $alice = 0;
    $bob = 0;

    foreach ($a as $key => $value) {
        if ($a[$key] > $b[$key]) {
            $alice++;
        } elseif ($a[$key] < $b[$key]) {
            $bob++;
        }
    }

    return [$alice, $bob];
}