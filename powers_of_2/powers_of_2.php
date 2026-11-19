<?php

function powersOfTwo(int $n): array {
    $powers = [];
    for ($i = 0; $i <= $n; $i++) {
        $powers[] = 2 ** $i;
    }
    return $powers;
}

// Test example
print_r(powersOfTwo(0)); // [1]
print_r(powersOfTwo(2)); // [1, 2, 4]
