<?php

function strCount(string $str, string $letter): int {
    if ($str === "") {
        return 0;
    }
    return substr_count($str, $letter);
}

// Test example
$str = "Hello";
$letter = "l";
echo strCount($str, $letter) . "\n";
