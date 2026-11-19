<?php

function numberToString(int $num): string {
    return (string)$num;
}

// Test example
echo numberToString(123) . "\n"; // "123"
echo numberToString(-100) . "\n"; // "-100"
