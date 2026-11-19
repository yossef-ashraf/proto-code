<?php

function replace(string $s): string {
    return preg_replace("/[aeiouAEIOU]/", "!", $s);
}

// Test example
echo replace("Hi!") . "\n";       // "H!!"
echo replace("!Hi! Hi!") . "\n";  // "!H!! H!!"
echo replace("aeiou") . "\n";     // "!!!!!"
