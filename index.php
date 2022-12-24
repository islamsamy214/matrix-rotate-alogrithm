<?php
// create a matrix
for ($i = 0; $i < 16; $i++) {
    if ($i < 4) {
        $matrix[$i] = [0, $i];
    }
    if (4 <= $i && $i < 8) {
        $matrix[$i] = [1, $i % 4];
    }
    if (8 <= $i && $i <= 12) {
        $matrix[$i] = [2, $i % 4];
    }
    if (12 <= $i && $i <= 16) {
        $matrix[$i] = [3, $i % 4];
    }
}

var_dump(rotateMatrix($matrix));

function rotateMatrix($matrix)
{
    for ($i = 0; $i < 4; $i++) {
        $matrix[$i] = [$i, 3];
        $matrix[$i + 4] = [$i, 2];
        $matrix[$i + 8] = [$i, 1];
        $matrix[$i + 12] = [$i, 0];
    }
    return $matrix;
}
//O(n)