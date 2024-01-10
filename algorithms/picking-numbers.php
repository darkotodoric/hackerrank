<?php

/**
 * https://www.hackerrank.com/challenges/picking-numbers/problem
 *
 * @param array $a
 *
 * @return int
 */
function pickingNumbers(array $a): int
{
    sort($a);
    $maxLength = 0;
    $total = count($a);

    for ($i = 0; $i < $total; $i++) {
        $count = 1;

        for ($j = $i + 1; $j < $total; $j++) {
            if (abs($a[$j] - $a[$i]) <= 1) {
                $count++;
            } else {
                break;
            }
        }

        if ($count > $maxLength) {
            $maxLength = $count;
        }
    }

    return $maxLength;
}