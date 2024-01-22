<?php

/**
 * https://www.hackerrank.com/challenges/circular-array-rotation/problem
 *
 * @param array $a
 * @param int $k
 * @param array $queries
 *
 * @return array
 */
function circularArrayRotation(array $a, int $k, array $queries): array
{
    $result = [];
    $temporary = [];

    for ($i = 0; $i < count($a); $i++) {
        $temporary[($i + $k) % count($a)] = $a[$i];
    }

    foreach ($queries as $value) {
        array_push($result, $temporary[$value]);
    }

    return $result;
}