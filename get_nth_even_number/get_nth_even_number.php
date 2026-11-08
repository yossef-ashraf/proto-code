<?php

function nthEven(int $n): int {
    return ($n - 1) * 2;
}

// Test example
echo nthEven(1) . "\n";   // 0
echo nthEven(3) . "\n";   // 4
echo nthEven(100) . "\n"; // 198
