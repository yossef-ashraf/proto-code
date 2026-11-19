<?php

function summation(int $n): int {
    return ($n * ($n + 1)) / 2;
}

// Test example
echo summation(2) . "\n"; // 3
echo summation(8) . "\n"; // 36
