<?php

/**
 * https://www.hackerrank.com/challenges/taum-and-bday/problem
 *
 * @param int $b
 * @param int $w
 * @param int $bc
 * @param int $wc
 * @param int $z
 *
 * @return int
 */
function taumBday(int $b, int $w, int $bc, int $wc, int $z): int
{
    if (abs($bc - $wc) <= $z) {
        return $b * $bc + $w * $wc;
    }

    if ($bc < $wc) {
        return $b * $bc + $w * ($bc + $z);
    }

    return $w * $wc + $b * ($wc + $z);
}