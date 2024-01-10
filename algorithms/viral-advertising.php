<?php

/**
 * https://www.hackerrank.com/challenges/strange-advertising/problem
 *
 * @param int $n
 *
 * @return int
 */
function viralAdvertising(int $n): int
{
    $shared = 5;
    $likes = 0;

    for ($day = 1; $day <= $n; $day++) {
        $likes += floor($shared / 2);
        $shared = floor($shared / 2) * 3;
    }

    return $likes;
}