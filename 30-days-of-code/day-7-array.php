<?php

// https://www.hackerrank.com/challenges/30-arrays/problem

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

// Reverse the array
$reversed_arr = array_reverse($arr);

// Print the reversed array
echo implode(" ", $reversed_arr);