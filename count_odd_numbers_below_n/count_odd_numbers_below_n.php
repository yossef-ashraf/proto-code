<?php

function oddCount(int $n): int {
    return intdiv($n, 2);
}

// Test example
$n = 15;
echo oddCount($n) . "\n";
