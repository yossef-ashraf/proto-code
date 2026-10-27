<?php

function simpleMultiplication($number) {
    if ($number % 2 == 0) {
        return $number * 8;
    }
    return $number * 9;
}

// Test example
$number = 2;
echo simpleMultiplication($number) . "\n";
