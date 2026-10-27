<?php

function removeExclamationMarks(string $str): string {
    return str_replace("!", "", $str);
}

// Test example
$str = "Hello! World!";
echo removeExclamationMarks($str) . "\n";
