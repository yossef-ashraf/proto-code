<?php

function flip(string $dir, array $arr): array {
    if ($dir === "R") {
        sort($arr);
    } else {
        rsort($arr);
    }
    return $arr;
}

// Test example
print_r(flip("R", [3, 2, 1, 2]));       // [1, 2, 2, 3]
print_r(flip("L", [1, 4, 5, 3, 5]));    // [5, 5, 4, 3, 1]
