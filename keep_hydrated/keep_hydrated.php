<?php

function litres(float $t): int {
    return (int)floor($t * 0.5);
}

// Test example
$time = 11.8;
echo litres($time) . "\n";
