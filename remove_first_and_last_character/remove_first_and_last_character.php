<?php

function removeChar(string $s): string {
    return substr($s, 1, -1);
}

// Test example
$str = "eloquent";
echo removeChar($str) . "\n";
