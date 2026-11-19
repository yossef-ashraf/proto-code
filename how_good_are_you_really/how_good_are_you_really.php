<?php

function betterThanAverage(array $classPoints, int $yourPoints): bool {
    $average = array_sum($classPoints) / count($classPoints);
    return $yourPoints > $average;
}

// Test example
var_dump(betterThanAverage([2, 3], 5)); // bool(true)
var_dump(betterThanAverage([100, 90], 80)); // bool(false)
