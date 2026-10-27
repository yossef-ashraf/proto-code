<?php

function isDivisible($n, $x, $y) {
    return ($n % $x === 0) && ($n % $y === 0);
}

// Test example
$n = 12;
$x = 2;
$y = 6;

var_dump(isDivisible($n, $x, $y));
