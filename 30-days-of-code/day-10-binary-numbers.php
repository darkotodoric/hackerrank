<?php

// https://www.hackerrank.com/challenges/30-binary-numbers/problem

$number = intval(trim(fgets(STDIN)));
$binary = decbin($number);
$binaryArray = str_split($binary);

$maxCount = 0;
$currentCount = 0;

foreach ($binaryArray as $bit) {
    if ($bit == '1') {
        $currentCount++;
        $maxCount = max($maxCount, $currentCount);
    } else {
        $currentCount = 0;
    }
}

echo $maxCount;