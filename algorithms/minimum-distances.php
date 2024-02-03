<?php

/**
 * https://www.hackerrank.com/challenges/minimum-distances/problem
 *
 * @param array $a
 *
 * @return int
 */
function minimumDistances(array $a): int
{
    $minDistance = PHP_INT_MAX;
    $indices = [];

    for ($i = 0; $i < count($a); $i++) {
        if (isset($indices[$a[$i]])) {
            $minDistance = min($minDistance, $i - $indices[$a[$i]]);
        }

        $indices[$a[$i]] = $i;
    }

    if ($minDistance == PHP_INT_MAX) {
        return -1;
    }

    return $minDistance;
}