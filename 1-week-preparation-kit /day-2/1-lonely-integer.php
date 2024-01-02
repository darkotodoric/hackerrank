<?php

/**
 * @param array $a
 * @return int
 */
function lonelyinteger(array $a): int
{
    $items = array_count_values($a);
    asort($items);

    return key($items);
}