<?php

function combat(int $health, int $damage): int {
    return max(0, $health - $damage);
}

// Test example
echo combat(100, 5) . "\n"; // 95
echo combat(20, 30) . "\n"; // 0
