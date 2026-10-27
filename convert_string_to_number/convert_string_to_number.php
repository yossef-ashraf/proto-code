<?php

function stringToNumber(string $str): int {
    return (int)$str;
}

// Test example
$str = "-7";
echo stringToNumber($str) . "\n";
