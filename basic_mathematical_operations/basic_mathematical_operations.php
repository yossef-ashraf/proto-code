<?php

function basicOp(string $op, $val1, $val2) {
    switch ($op) {
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '*':
            return $val1 * $val2;
        case '/':
            return $val1 / $val2;
        default:
            return 0;
    }
}

// Test example
echo basicOp('+', 4, 7) . "\n";
echo basicOp('*', 5, 5) . "\n";
