<?php

function makeNegative(float $num): float {
    return -abs($num);
}

// Test example
echo makeNegative(1) . "\n";  // -1
echo makeNegative(-5) . "\n"; // -5
echo makeNegative(0) . "\n";  // 0
