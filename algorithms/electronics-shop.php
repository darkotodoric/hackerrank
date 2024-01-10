<?php

/**
 * https://www.hackerrank.com/challenges/electronics-shop/problem
 *
 * @param array $keyboards
 * @param array $drives
 * @param int $b
 *
 * @return int
 */
function getMoneySpent(array $keyboards, array $drives, int $b): int
{
    $price = -1;

    foreach ($keyboards as $kValue) {
        foreach ($drives as $dValue) {
            $total = $kValue + $dValue;
            if ($total > $b) {
                continue;
            }

            if ($total < $price) {
                continue;
            }

            $price = $total;
        }
    }

    return $price;
}