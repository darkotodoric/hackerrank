<?php

/**
 * https://www.hackerrank.com/challenges/bon-appetit/problem
 *
 * @param array $bill
 * @param int $k
 * @param int $b
 */
function bonAppetit(array $bill, int $k, int $b)
{
    unset($bill[$k]);
    $total = array_sum($bill) / 2;

    $payable = ($b - $total);
    if ($payable == 0) {
        $payable = "Bon Appetit";
    }

    echo $payable;
}