<?php

function between(int $a, int $b): array {
    return range($a, $b);
}

// Test example
print_r(between(1, 4));  // [1, 2, 3, 4]
print_r(between(-2, 2)); // [-2, -1, 0, 1, 2]
