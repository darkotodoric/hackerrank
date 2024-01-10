<?php

/**
 * https://www.hackerrank.com/challenges/migratory-birds/problem
 *
 * @param array $arr
 *
 * @return int
 */
function migratoryBirds(array $arr): int
{
    $counter = [];
    foreach ($arr as $val) {
        if (!array_key_exists($val, $counter)) {
            $counter[$val] = 1;
        } else {
            $counter[$val] += 1;
        }
    }

    $array = array_keys($counter, max($counter));
    sort($array);

    return $array[0];
}