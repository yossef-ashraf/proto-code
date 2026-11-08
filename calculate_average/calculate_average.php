<?php

function find_average(array $array): float {
    if (empty($array)) {
        return 0;
    }
    return array_sum($array) / count($array);
}

// Test example
$array = [1, 2, 3, 4];
echo find_average($array) . "\n"; // 2.5
