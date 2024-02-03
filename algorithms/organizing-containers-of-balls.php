<?php

/**
 * https://www.hackerrank.com/challenges/organizing-containers-of-balls/problem
 *
 * @param array $container
 *
 * @return string
 */
function organizingContainers(array $container): string
{
    $n = count($container);
    $rowSums = array_fill(0, $n, 0);
    $colSums = array_fill(0, $n, 0);

    // Calculate the sum of balls in each container and the sum of each type of balls
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $rowSums[$i] += $container[$i][$j];
            $colSums[$j] += $container[$i][$j];
        }
    }

    // Sort sums to compare them
    sort($rowSums);
    sort($colSums);

    // If the sorted arrays are equal then it's possible to swap balls to satisfy the condition
    for ($i = 0; $i < $n; $i++) {
        if ($rowSums[$i] != $colSums[$i]) {
            return "Impossible";
        }
    }

    return "Possible";
}