<?php

function check(array $a, $x): bool {
    return in_array($x, $a);
}

// Test example
$a = [66, 101];
$x = 66;
var_dump(check($a, $x)); // bool(true)

$names = ["t", "e", "s", "t"];
var_dump(check($names, "e")); // bool(true)
