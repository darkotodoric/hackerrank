<?php

/**
 * https://www.hackerrank.com/challenges/mini-max-sum/problem
 *
 * @param array $arr
 *
 * @return void
 */
function miniMaxSum(array $arr)
{
    sort($arr);
    $withoutMin = array_slice($arr, 1);
    $withoutMax = array_slice($arr, 0, count($arr) - 1);

    $totalWithoutMin = array_sum($withoutMin);
    $totalWithoutMax = array_sum($withoutMax);

    echo $totalWithoutMax . ' ' . $totalWithoutMin;
}