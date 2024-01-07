<?php

function getTotalX(array $a, array $b): int
{
    $fun2 = calcForArray($a, 'fun2');
    $fun1 = calcForArray($b, 'fun1');
    $count = 0;

    for ($i = $fun2, $j = 2; $i <= $fun1; $i = $fun2 * $j, $j++) {
        if ($fun1 % $i == 0) {
            $count++;
        }
    }

    return $count;
}

function fun1(int $a, int $b): int
{
    if ($b == 0) {
        return $a;
    }
    
    return fun1($b, $a % $b);
}

function fun2(int $a, int $b): int
{
    return $a * ($b / fun1($a, $b));
}

function calcForArray(array $arr, string $name): int
{
    $result = $arr[0];
    for ($i = 1, $count = count($arr); $i < $count; $i++) {
        $result = $name($result, $arr[$i]);
    }

    return $result;
}