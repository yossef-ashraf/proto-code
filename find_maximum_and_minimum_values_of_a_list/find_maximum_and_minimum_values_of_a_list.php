<?php

function findMin(array $array): int {
    return min($array);
}

function findMax(array $array): int {
    return max($array);
}

// Test example
$array = [4, 6, 2, 1, 9, 63, -134, 566];
echo "Min: " . findMin($array) . "\n";
echo "Max: " . findMax($array) . "\n";
