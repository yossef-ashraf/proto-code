<?php

function reverseSeq(int $n): array {
    return range($n, 1);
}

// Test example
print_r(reverseSeq(5)); // [5, 4, 3, 2, 1]
