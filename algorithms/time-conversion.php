<?php

/**
 * https://www.hackerrank.com/challenges/time-conversion/problem
 *
 * @param string $s
 *
 * @return string
 */
function timeConversion(string $s): string
{
    $timestamp = strtotime($s);

    return date('H:i:s', $timestamp);
}