<?php

function checkForFactor(int $base, int $factor): bool {
    return $base % $factor === 0;
}

// Test example
var_dump(checkForFactor(10, 2)); // bool(true)
var_dump(checkForFactor(9, 2));  // bool(false)
