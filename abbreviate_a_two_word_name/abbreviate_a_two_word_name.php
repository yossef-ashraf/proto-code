<?php

function abbrevName(string $name): string {
    $words = explode(" ", $name);
    return strtoupper($words[0][0]) . "." . strtoupper($words[1][0]);
}

// Test example
echo abbrevName("Sam Harris") . "\n";     // S.H
echo abbrevName("patrick feeney") . "\n"; // P.F
