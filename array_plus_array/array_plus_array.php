<?php

function arrayPlusArray(array $arr1, array $arr2): int {
    return array_sum($arr1) + array_sum($arr2);
}

// Test example
echo arrayPlusArray([1, 2, 3], [4, 5, 6]) . "\n";       // 21
echo arrayPlusArray([-1, -2, -3], [-4, -5, -6]) . "\n"; // -21
