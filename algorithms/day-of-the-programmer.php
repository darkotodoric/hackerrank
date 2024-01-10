<?php

/**
 * https://www.hackerrank.com/challenges/day-of-the-programmer/problem
 *
 * @param int $year
 *
 * @return string
 */
function dayOfProgrammer(int $year): string
{
    $pgDay = 256;
    $days = 243;

    if ($year == 1918) {
        $pgDay += 13;
    } else {
        if (($year < 1918 && $year % 4 == 0) || ($year > 1918 && $year % 400 == 0) || ($year > 1918 && $year % 4 == 0 && $year % 100 != 0)) {
            $days += 1;
        }
    }

    return ($pgDay - $days) . ".09." . $year;
}
