<?php

// https://www.hackerrank.com/challenges/30-conditional-statements/problem

$N = intval(trim(fgets(STDIN)));

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $N);
fclose($stdin);

if ($N % 2 == 1) {
    echo "Weird";
} elseif ($N >= 2 && $N <= 5) {
    echo "Not Weird";
} elseif ($N >= 6 && $N <= 20) {
    echo "Weird";
} else {
    echo "Not Weird";
}