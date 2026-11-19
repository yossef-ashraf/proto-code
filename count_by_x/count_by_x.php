<?php

function countBy(int $x, int $n): array {
    $z = [];
    for ($i = 1; $i <= $n; $i++) {
        $z[] = $x * $i;
    }
    return $z;
}

// Test example
print_r(countBy(1, 10)); // [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print_r(countBy(2, 5));  // [2, 4, 6, 8, 10]
