<?php

// https://www.hackerrank.com/challenges/find-hackerrank/problem

$_fp = fopen("php://stdin", "r");
$N = intval(fgets($_fp));

for ($i = 0; $i < $N; $i++) {
    $line = trim(fgets($_fp));

    if (preg_match('/^hackerrank$/', $line)) {
        echo "0\n";
    } elseif (preg_match('/^hackerrank/', $line)) {
        echo "1\n";
    } elseif (preg_match('/hackerrank$/', $line)) {
        echo "2\n";
    } else {
        echo "-1\n";
    }
}
