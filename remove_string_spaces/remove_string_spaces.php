<?php

function noSpace(string $s): string {
    return str_replace(" ", "", $s);
}

// Test example
$str = "8 8 Bi fk8h B 8 BBibBl  q ";
echo noSpace($str) . "\n";
