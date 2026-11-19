<?php

function sumArray(?array $array): int {
    if (empty($array) || count($array) <= 1) {
        return 0;
    }
    return array_sum($array) - min($array) - max($array);
}

// Test example
echo sumArray([6, 2, 1, 8, 10]) . "\n"; // 16
echo sumArray([1, 1, 11, 2, 3]) . "\n"; // 6
