<?php

function dnaToRna(string $str): string {
    return str_replace("T", "U", $str);
}

// Test example
echo dnaToRna("GCAT") . "\n"; // GCAU
echo dnaToRna("TTTT") . "\n"; // UUUU
