<?php

/**
 * @param int $d1
 * @param int $m1
 * @param int $y1
 * @param int $d2
 * @param int $m2
 * @param int $y2
 *
 * @return int
 */
function libraryFine(int $d1, int $m1, int $y1, int $d2, int $m2, int $y2): int
{
    if ($y1 > $y2) {
        return ($y1 - $y2) * 10000;
    }

    if ($m1 > $m2 && $y1 == $y2) {
        return ($m1 - $m2) * 500;
    }

    if ($d1 > $d2 && $m1 == $m2 && $y1 == $y2) {
        return ($d1 - $d2) * 15;
    }

    return 0;
}