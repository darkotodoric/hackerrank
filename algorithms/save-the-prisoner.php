<?php

/**
 * https://www.hackerrank.com/challenges/save-the-prisoner/problem
 *
 * @param int $n
 * @param int $m
 * @param int $s
 *
 * @return int
 */
function saveThePrisoner(int $n, int $m, int $s): int
{
    if ($n == 1) {
        return 1;
    }

    $result = (($m + $s) % $n) - 1;
    if ($result <= 0) {
        return $result + $n;
    }

    return $result;
}