<?php

/**
 * https://www.hackerrank.com/challenges/halloween-sale/problem
 *
 * @param int $p
 * @param int $d
 * @param int $m
 * @param int $s
 * @return int
 */
function howManyGames(int $p, int $d, int $m, int $s): int
{
    $totalGames = 0;

    while ($s >= $p) {
        $totalGames++;
        $s -= $p;

        $p = max($p - $d, $m);
    }

    return $totalGames;
}