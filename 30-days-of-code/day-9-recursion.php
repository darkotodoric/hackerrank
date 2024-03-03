<?php

// https://www.hackerrank.com/challenges/30-recursion/problem

/**
 * @param int $n
 *
 * @return float
 */
function factorial(int $n): float
{
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($fptr);