<?php

/**
 * https://www.hackerrank.com/challenges/sock-merchant/problem
 *
 * @param int $n
 * @param array $ar
 *
 * @return int
 */
function sockMerchant(int $n, array $ar): int
{
    $pairs = [];
    $total = 0;

    foreach ($ar as $pair) {
        if (isset($pairs[$pair])) {
            $total++;

            unset($pairs[$pair]);
            continue;
        }

        $pairs[$pair] = 1;
    }

    return $total;
}
