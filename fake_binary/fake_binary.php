<?php

function fake_bin(string $s): string {
    $result = "";
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        $result .= ($s[$i] < "5") ? "0" : "1";
    }
    return $result;
}

// Test example
echo fake_bin("45385593107843568") . "\n"; // 01011110001100111
