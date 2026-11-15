<?php

function lovefunc(int $flower1, int $flower2): bool {
    return ($flower1 % 2) !== ($flower2 % 2);
}

// Test example
var_dump(lovefunc(1, 4)); // bool(true)
var_dump(lovefunc(2, 2)); // bool(false)
var_dump(lovefunc(0, 1)); // bool(true)
