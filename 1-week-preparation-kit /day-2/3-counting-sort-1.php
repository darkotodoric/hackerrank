<?php

/**
 * @param array $arr
 *
 * @return array
 */
function countingSort(array $arr): array
{
    $items = [];
    for ($x = 0; $x < 100; $x++) {
        $items[$x] = 0;
    }

    foreach ($arr as $value) {
        $items[$value]++;
    }

    return $items;
}