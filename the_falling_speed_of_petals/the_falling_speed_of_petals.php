<?php

function sakuraFall(float $v): float {
    if ($v <= 0) {
        return 0;
    }
    return 400 / $v;
}

// Test example
echo sakuraFall(5) . "\n";  // 80
echo sakuraFall(10) . "\n"; // 40
echo sakuraFall(-1) . "\n"; // 0
