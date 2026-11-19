<?php

function smallestInteger(array $arr): int {
    return min($arr);
}

// Test example
echo smallestInteger([34, 15, 88, 2]) . "\n";    // 2
echo smallestInteger([34, -345, -1, 100]) . "\n"; // -345
