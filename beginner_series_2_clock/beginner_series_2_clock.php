<?php

function past(int $h, int $m, int $s): int {
    return (($h * 3600) + ($m * 60) + $s) * 1000;
}

// Test example
$h = 0;
$m = 1;
$s = 1;
echo past($h, $m, $s) . "\n";
