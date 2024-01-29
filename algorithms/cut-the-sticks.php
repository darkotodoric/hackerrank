<?php

/**
 * https://www.hackerrank.com/challenges/cut-the-sticks/problem
 *
 * @param array $arr
 * @return array
 */
function cutTheSticks(array $arr): array
{
    $result = [];

    while (count($arr) > 0) {
        $result[] = count($arr);
        $min = min($arr);

        $arr = array_filter($arr, function ($value) use ($min) {
            return ($value - $min) > 0;
        });

        $arr = array_map(function ($value) use ($min) {
            return $value - $min;
        }, $arr);
    }

    return $result;
}