<?php

/**
 * https://www.hackerrank.com/challenges/jumping-on-the-clouds/problem
 *
 * @param array $c
 *
 * @return int
 */
function jumpingOnClouds(array $c): int
{
    $n = count($c);
    $jumps = 0;
    $i = 0;

    while ($i < $n - 1) {
        if ($i + 2 < $n && $c[$i + 2] == 0) {
            $i += 2;
        } else {
            $i++;
        }

        $jumps++;
    }

    return $jumps;
}