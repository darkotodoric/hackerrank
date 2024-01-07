<?php

/**
 * @param int $x1
 * @param int $v1
 * @param int $x2
 * @param int $v2
 *
 * @return string
 */
function kangaroo(int $x1, int $v1, int $x2, int $v2): string
{
    if (($x1 < $x2) && ($v1 < $v2)) {
        return 'NO';
    }

    if (($v1 != $v2) && (($x2 - $x1) % ($v1 - $v2)) == 0) {
        return 'YES';
    } else {
        return 'NO';
    }
}