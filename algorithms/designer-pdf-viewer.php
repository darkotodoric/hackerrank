<?php

/**
 * https://www.hackerrank.com/challenges/designer-pdf-viewer/problem
 *
 * @param array $h
 * @param string $word
 *
 * @return int
 */
function designerPdfViewer(array $h, string $word): int
{
    $alphabet = range('a', 'z');
    $tallestLetter = 0;

    foreach (str_split($word) as $letter) {
        $letterHeight = $h[array_search($letter, $alphabet)];
        if ($letterHeight <= $tallestLetter) {
            continue;
        }

        $tallestLetter = $letterHeight;
    }

    return count(str_split($word)) * $tallestLetter;
}