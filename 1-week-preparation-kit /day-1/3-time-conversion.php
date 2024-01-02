<?php

function timeConversion(string $s): string
{
    $timestamp = strtotime($s);

    return date('H:i:s', $timestamp);
}