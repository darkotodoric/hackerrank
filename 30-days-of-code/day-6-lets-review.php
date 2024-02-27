<?php

// https://www.hackerrank.com/challenges/30-review-loop/problem

$_fp = fopen("php://stdin", "r");

/**
 * @param string $string
 *
 * @return void
 */
function printEvenOddChars(string $string)
{
    $length = strlen($string);
    $evenChars = '';
    $oddChars = '';

    for ($i = 0; $i < $length; $i++) {
        if ($i % 2 == 0) {
            $evenChars .= $string[$i];
        } else {
            $oddChars .= $string[$i];
        }
    }

    echo $evenChars . ' ' . $oddChars . "\n";
}

fscanf($_fp, "%d\n", $n);

for ($i = 0; $i < $n; $i++) {
    fscanf($_fp, "%s\n", $string);
    printEvenOddChars($string);
}

fclose($_fp);
