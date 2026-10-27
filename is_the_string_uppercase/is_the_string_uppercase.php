<?php

function isUpperCase(string $str): bool {
    return $str === strtoupper($str);
}

// Test example
$str = "HELLO I AM DONALD";
var_dump(isUpperCase($str));
