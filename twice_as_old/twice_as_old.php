<?php

function twice_as_old(int $dad_years_old, int $son_years_old): int {
    return abs($dad_years_old - (2 * $son_years_old));
}

// Test example
echo twice_as_old(36, 7) . "\n";  // 22
echo twice_as_old(55, 30) . "\n"; // 5
echo twice_as_old(42, 21) . "\n"; // 0
