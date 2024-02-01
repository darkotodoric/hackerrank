<?php

/**
 * https://www.hackerrank.com/challenges/manasa-and-stones/problem
 *
 * @param int $n
 * @param int $a
 * @param int $b
 *
 * @return array
 */
function stones(int $n, int $a, int $b): array
{
    $values = [];
    for ($i = 0; $i < $n; $i++) {
        $value = $a * ($n - 1 - $i) + $b * $i;
        $values[$value] = true;
    }

    ksort($values);
    return array_keys($values);
}