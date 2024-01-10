<?php

/**
 * https://www.hackerrank.com/challenges/cats-and-a-mouse/problem
 *
 * @param int $x
 * @param int $y
 * @param int $z
 *
 * @return string
 */
function catAndMouse(int $x, int $y, int $z): string
{
    $catA = abs($x - $z);
    $catB = abs($y - $z);

    if ($catA < $catB) {
        return 'Cat A';
    }

    if ($catA > $catB) {
        return 'Cat B';
    }

    return 'Mouse C';
}