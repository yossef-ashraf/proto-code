<?php

function squareSum(array $numbers): int {
    $sum = 0;
    foreach ($numbers as $n) {
        $sum += $n * $n;
    }
    return $sum;
}

// Test example
$numbers = [1, 2, 2];
echo squareSum($numbers) . "\n";
