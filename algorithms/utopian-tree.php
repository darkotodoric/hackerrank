<?php

/**
 * https://www.hackerrank.com/challenges/utopian-tree/problem
 *
 * @param int $n
 *
 * @return int
 */
function utopianTree(int $n): int
{
    $isSpring = true;
    $height = 1;

    for ($x = 0; $x < $n; $x++) {
        if ($isSpring) {
            $height = $height * 2;
            $isSpring = false;
        } else {
            $height++;
            $isSpring = true;
        }
    }

    return $height;
}