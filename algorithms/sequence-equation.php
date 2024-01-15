<?php

/**
 * https://www.hackerrank.com/challenges/permutation-equation/problem
 *
 * @param array $p
 *
 * @return array
 */
function permutationEquation(array $p): array
{
    $valueIndex = [];
    foreach ($p as $index => $value) {
        $valueIndex[$value] = $index + 1;
    }

    $result = [];
    for ($x = 1; $x <= count($p); $x++) {
        $y = $valueIndex[$valueIndex[$x]];
        array_push($result, $y);
    }

    return $result;
}