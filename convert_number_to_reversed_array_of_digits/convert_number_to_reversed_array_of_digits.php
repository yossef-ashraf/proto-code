<?php

function digitize(int $n): array {
    return array_map('intval', str_split(strrev((string)$n)));
}

// Test example
print_r(digitize(35231)); // [1, 3, 2, 5, 3]
print_r(digitize(0));     // [0]
