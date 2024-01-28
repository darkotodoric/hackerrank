<?php

/**
 * https://www.hackerrank.com/challenges/repeated-string/problem
 *
 * @param string $s
 * @param int $n
 *
 * @return int
 */
function repeatedString(string $s, int $n): int
{
    $aCount = substr_count($s, 'a');

    $fullStrings = floor($n / strlen($s));

    $totalACount = $fullStrings * $aCount;

    $partialString = substr($s, 0, $n % strlen($s));
    $totalACount += substr_count($partialString, 'a');

    return $totalACount;
}