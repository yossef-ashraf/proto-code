<?php

function sumOfDifferences(array $arr): int {
    if (count($arr) <= 1) {
        return 0;
    }
    return max($arr) - min($arr);
}

// Test example
echo sumOfDifferences([2, 1, 10]) . "\n";  // 9
echo sumOfDifferences([-3, -2, -1]) . "\n"; // 2
echo sumOfDifferences([1]) . "\n";          // 0
