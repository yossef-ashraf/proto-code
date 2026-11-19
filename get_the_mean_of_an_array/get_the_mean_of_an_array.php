<?php

function get_average(array $a): int {
    return intdiv(array_sum($a), count($a));
}

// Test example
echo get_average([2, 2, 2, 2]) . "\n";        // 2
echo get_average([1, 5, 87, 45, 8, 8]) . "\n"; // 25
