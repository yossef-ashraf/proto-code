<?php

function evenOrOdd($number) {
    return $number % 2 === 0 ? "Even" : "Odd";
}

// Test example
$number = 7;
echo evenOrOdd($number) . "\n";
