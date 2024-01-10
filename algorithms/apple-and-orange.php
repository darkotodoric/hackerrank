<?php

/**
 * https://www.hackerrank.com/challenges/apple-and-orange/problem
 *
 * @param int $s
 * @param int $t
 * @param int $a
 * @param int $b
 * @param array $apples
 * @param array $oranges
 *
 * @return void
 */
function countApplesAndOranges(int $s, int $t, int $a, int $b, array $apples, array $oranges)
{
    printf("%d\r\n%d", countFruits($apples, $a, $s, $t), countFruits($oranges, $b, $s, $t));
}

/**
 * @param array $fruits
 * @param int $a
 * @param int $s
 * @param int $t
 *
 * @return int
 */
function countFruits(array $fruits, int $a, int $s, int $t): int
{
    return count(
        array_filter($fruits, function ($f) use ($a, $s, $t) {
            return $a + $f >= $s and $a + $f <= $t;
        })
    );
}