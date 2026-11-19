<?php

function hotpo(int $n): int {
    $steps = 0;
    while ($n > 1) {
        $n = ($n % 2 === 0) ? ($n / 2) : ($n * 3 + 1);
        $steps++;
    }
    return $steps;
}

// Test example
echo hotpo(1) . "\n"; // 0
echo hotpo(5) . "\n"; // 5
echo hotpo(6) . "\n"; // 8
