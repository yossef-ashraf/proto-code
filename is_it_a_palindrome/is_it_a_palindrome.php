<?php

function isPalindrome(string $line): bool {
    $lower = strtolower($line);
    return $lower === strrev($lower);
}

// Test example
var_dump(isPalindrome("Abba"));  // bool(true)
var_dump(isPalindrome("hello")); // bool(false)
