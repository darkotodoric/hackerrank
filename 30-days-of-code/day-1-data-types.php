<?php

// https://www.hackerrank.com/challenges/30-data-types/problem

$handle = fopen("php://stdin", "r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Read and store int, double, and string in variables.
$int_input = intval(fgets(STDIN));
$double_input = doubleval(fgets(STDIN));
$string_input = fgets(STDIN);

// Print the sum of int variable with given int variable.
echo $i + $int_input . "\n";

// Print the sum of double variable with given double variable.
echo number_format($d + $double_input, 1) . "\n";

// Print the concatenation of string variable with given string variable.
echo $s . $string_input;

fclose($handle);
