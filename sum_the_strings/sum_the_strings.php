<?php

function sum_str(string $a, string $b): string {
    return strval((int)$a + (int)$b);
}

// Test example
echo sum_str("4", "5") . "\n";  // "9"
echo sum_str("34", "5") . "\n"; // "39"
echo sum_str("", "") . "\n";    // "0"
echo sum_str("2", "") . "\n";   // "2"
