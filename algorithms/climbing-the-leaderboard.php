<?php

/**
 * https://www.hackerrank.com/challenges/climbing-the-leaderboard/problem
 *
 * @param array $ranked
 * @param array $player
 *
 * @return array
 */
function climbingLeaderboard(array $ranked, array $player): array
{
    $uniqueRanked = array_reverse(array_values(array_unique($ranked)));
    $ranks = [];
    $lastRankPos = 0;

    foreach ($player as $score) {
        while ($lastRankPos < count($uniqueRanked) && $score >= $uniqueRanked[$lastRankPos]) {
            $lastRankPos++;
        }

        $ranks[] = count($uniqueRanked) - $lastRankPos + 1;
    }

    return $ranks;
}