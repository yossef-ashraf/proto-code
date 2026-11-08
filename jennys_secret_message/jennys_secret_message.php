<?php

function greet(string $name): string {
    if ($name === "Johnny") {
        return "Hello, my love!";
    }
    return "Hello, " . $name . "!";
}

// Test example
echo greet("James") . "\n";  // Hello, James!
echo greet("Johnny") . "\n"; // Hello, my love!
