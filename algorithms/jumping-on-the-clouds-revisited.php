<?php

/**
 * @param array $c
 * @param int $k
 *
 * @return int
 */
function jumpingOnClouds(array $c, int $k): int
{
    $energyLevel = 100;
    $i = $k;

    while (true) {
        if ($i >= count($c)) {
            $i = $i - count($c);
        }

        $energyLevel = $energyLevel - 1;
        if ($c[$i] == 1) {
            $energyLevel = $energyLevel - 2;
        }

        if ($i == 0) {
            break;
        }

        $i += $k;
    }

    return $energyLevel;
}