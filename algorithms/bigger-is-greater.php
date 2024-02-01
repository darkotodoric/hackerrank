<?php

/**
 * https://www.hackerrank.com/challenges/bigger-is-greater/problem
 *
 * @param string $w
 *
 * @return string
 */
function biggerIsGreater(string $w): string
{
    $length = strlen($w);
    $w = str_split($w);

    $i = $length - 2;
    while ($i >= 0 && $w[$i] >= $w[$i + 1]) {
        $i--;
    }

    if ($i < 0) {
        return 'no answer';
    }

    $j = $length - 1;
    while ($w[$j] <= $w[$i]) {
        $j--;
    }

    $temp = $w[$i];
    $w[$i] = $w[$j];
    $w[$j] = $temp;

    $remainingSubstring = array_splice($w, $i + 1);
    sort($remainingSubstring);

    $w = array_merge(array_slice($w, 0, $i + 1), $remainingSubstring);
    return implode('', $w);
}