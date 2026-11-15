<?php

function multiTable(int $number): string {
    $lines = [];
    for ($i = 1; $i <= 10; $i++) {
        $lines[] = "{$i} * {$number} = " . ($i * $number);
    }
    return implode("\n", $lines);
}

// Test example
echo multiTable(5) . "\n";
