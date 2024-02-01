<?php

/**
 * https://www.hackerrank.com/challenges/acm-icpc-team/problem
 *
 * @param array $topic
 *
 * @return array
 */
function acmTeam(array $topic): array
{
    $highest = -1;
    $bestTeam = 0;
    $n = $topic;

    for ($i = 0; $i < count($n) - 1; $i++) {
        for ($j = $i + 1; $j < count($n); $j++) {
            $tmp = substr_count($topic[$i] | $topic[$j], "1");

            if ($tmp > $highest) {
                $highest = $tmp;
                $bestTeam = 1;
            } else {
                if ($tmp == $highest) {
                    $bestTeam++;
                }
            }
        }
    }

    return [$highest, $bestTeam];
}