<?php

/**
 * https://www.hackerrank.com/challenges/append-and-delete/problem
 *
 * @param string $s
 * @param string $t
 * @param int $k
 *
 * @return string
 */
function appendAndDelete(string $s, string $t, int $k): string
{
    $commonLength = min(strlen($s), strlen($t));

    for ($i = 0; $i < $commonLength; $i++) {
        if ($s[$i] != $t[$i]) {
            break;
        }
    }

    $commonLength = $i;
    $totalOperations = (strlen($s) - $commonLength) + (strlen($t) - $commonLength);

    // Check if the number of operations is possible to perform in exactly k steps
    if ($totalOperations > $k) {
        return "No";
    } elseif (($totalOperations - $k) % 2 == 0) {
        return "Yes";
    } elseif (strlen($s) + strlen($t) - $k < 0) {
        // If we have enough operations to delete both strings and still perform more operations
        return "Yes";
    } else {
        return "No";
    }
}