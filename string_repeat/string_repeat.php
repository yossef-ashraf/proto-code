<?php

function repeatStr(int $n, string $str): string {
    return str_repeat($str, $n);
}

// Test example
$n = 5;
$str = "Hello";
echo repeatStr($n, $str) . "\n";
