<?php

/**
 * @param int $a
 * @param int $b
 *
 * @return int
 */
function squares(int $a, int $b): int
{
    $startSquareNumberRounded = ceil(sqrt($a));
    $endSquareNumberRounded = floor(sqrt($b));

    return ($endSquareNumberRounded - $startSquareNumberRounded) + 1;
}