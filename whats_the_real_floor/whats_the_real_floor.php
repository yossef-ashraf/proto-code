<?php

function getRealFloor(int $n): int {
    if ($n <= 0) {
        return $n;
    }
    if ($n < 13) {
        return $n - 1;
    }
    return $n - 2;
}

// Test example
echo getRealFloor(1) . "\n";  // 0
echo getRealFloor(15) . "\n"; // 13
echo getRealFloor(-3) . "\n"; // -3
