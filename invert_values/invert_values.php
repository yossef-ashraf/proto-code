<?php

function invert(array $a): array {
    $result = [];
    foreach ($a as $val) {
        $result[] = -$val;
    }
    return $result;
}

// Test example
$array = [1, -2, 3, -4, 5];
print_r(invert($array));
