<?php

/**
 * https://www.hackerrank.com/challenges/breaking-best-and-worst-records/problem
 *
 * @param array $scores
 *
 * @return array
 */
function breakingRecords(array $scores): array
{
    $max = $scores[0];
    $min = $scores[0];
    $countMax = 0;
    $countMin = 0;

    for ($i = 1; $i < count($scores); $i++) {
        if ($scores[$i] > $max) {
            $countMax++;
            $max = $scores[$i];
        }

        if ($scores[$i] < $min) {
            $countMin++;
            $min = $scores[$i];
        }
    }

    return [$countMax, $countMin];
}