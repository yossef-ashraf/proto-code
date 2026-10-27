<?php

function grow(array $a): int {
    $result = 1;
    foreach ($a as $val) {
        $result *= $val;
    }
    return $result;
}

// Test example
$array = [1, 2, 3, 4];
echo grow($array) . "\n";
