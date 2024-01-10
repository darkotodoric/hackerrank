<?php

/**
 * https://www.hackerrank.com/challenges/angry-professor/problem
 *
 * @param int $k
 * @param array $a
 *
 * @return string
 */
function angryProfessor(int $k, array $a): string
{
    $late = 0;
    foreach ($a as $studentArrival) {
        if ($studentArrival <= 0) {
            continue;
        }

        $late++;
    }

    if ((count($a) - $late) >= $k) {
        return 'NO';
    }

    return 'YES';
}