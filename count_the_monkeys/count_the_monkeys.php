<?php

function monkeyCount(int $n): array {
    return range(1, $n);
}

// Test example
print_r(monkeyCount(5)); // [1, 2, 3, 4, 5]
