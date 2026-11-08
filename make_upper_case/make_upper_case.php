<?php

function makeUpperCase(string $input): string {
    return strtoupper($input);
}

// Test example
echo makeUpperCase("hello") . "\n";        // HELLO
echo makeUpperCase("Hello World!") . "\n"; // HELLO WORLD!
