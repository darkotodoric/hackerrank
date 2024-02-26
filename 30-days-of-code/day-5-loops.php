<?php

// https://www.hackerrank.com/challenges/30-loops/problem

$n = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= 10; $i++) {
    $result = $n * $i;
    echo "$n x $i = $result\n";
}