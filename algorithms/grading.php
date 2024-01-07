<?php

/**
 * @param array $grades
 *
 * @return array
 */
function gradingStudents(array $grades): array
{
    for ($i = 0; $i < count($grades); $i++) {
        if ($grades[$i] >= 38) {
            $x = $grades[$i] % 5;
            if ($x == 3) {
                $grades[$i] += 2;
            }

            if ($x == 4) {
                $grades[$i] += 1;
            }
        }
    }

    return $grades;
}