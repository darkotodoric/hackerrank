<?php

// https://www.hackerrank.com/challenges/alien-username/problem

$_fp = fopen("php://stdin", "r");
$N = intval(fgets($_fp));

for ($i = 0; $i < $N; $i++) {
    $line = trim(fgets($_fp));

    if (preg_match('/^[\._]\d+[a-zA-Z]*_?$/', $line)) {
        echo "VALID\n";
    } else {
        echo "INVALID\n";
    }
}
