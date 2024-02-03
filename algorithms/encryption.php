<?php

/**
 * https://www.hackerrank.com/challenges/encryption/problem
 *
 * @param string $s
 *
 * @return string
 */
function encryption(string $s): string
{
    // Remove spaces from the string
    $s = preg_replace('/\s+/', '', $s);

    // Calculate the rows and columns for the grid
    $L = strlen($s);
    $rows = floor(sqrt($L));
    $cols = ceil(sqrt($L));

    // Ensure that rows * columns >= L
    if ($rows * $cols < $L) {
        $rows = $cols;
    }

    // Create the grid
    $grid = [];
    for ($i = 0; $i < $rows; $i++) {
        $grid[$i] = substr($s, $i * $cols, $cols);
    }

    // Encrypt the message
    $encrypted = '';
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            if ($i < strlen($grid[$j])) {
                $encrypted .= $grid[$j][$i];
            }
        }

        if ($i < $cols - 1) {
            $encrypted .= ' ';
        }
    }

    return $encrypted;
}