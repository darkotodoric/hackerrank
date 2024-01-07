<?php

/**
 * @param int $n
 *
 * @return void
 */
function staircase(int $n)
{
    for ($x = 1; $x <= $n; $x++) {
        echo str_repeat(' ', $n - $x) . str_repeat('#', $x) . "\n";
    }
}