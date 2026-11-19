<?php

function positive_sum(array $arr): int {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }
    return $sum;
}

// Test example
echo positive_sum([1, -4, 7, 12]) . "\n"; // 20
echo positive_sum([-1, -2, -3]) . "\n";    // 0
