<?php

/**
 * @param array $s
 * @param int $d
 * @param int $m
 *
 * @return int
 */
function birthday(array $s, int $d, int $m): int
{
    $counter = 0;

    for ($i = 0; $i <= count($s) - $m; $i++) {
        $sum = $s[$i];

        for ($j = 1; $j < $m; $j++) {
            $sum += $s[$i + $j];
        }

        if ($sum == $d) {
            $counter++;
        }
    }

    return $counter;
}
