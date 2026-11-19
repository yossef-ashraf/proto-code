<?php

function is_even(float $n): bool {
    return fmod($n, 2) == 0;
}

// Test example
var_dump(is_even(0));   // bool(true)
var_dump(is_even(0.5)); // bool(false)
var_dump(is_even(2));   // bool(true)
var_dump(is_even(-4));  // bool(true)
