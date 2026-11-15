<?php

function move(int $pos, int $roll): int {
    return $pos + ($roll * 2);
}

// Test example
echo move(3, 6) . "\n"; // 15
echo move(0, 4) . "\n"; // 8
