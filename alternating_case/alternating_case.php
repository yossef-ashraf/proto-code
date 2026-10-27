<?php

function toAlternatingCase(string $s): string {
    $result = "";
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        $char = $s[$i];
        if (ctype_upper($char)) {
            $result .= strtolower($char);
        } elseif (ctype_lower($char)) {
            $result .= strtoupper($char);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

// Test example
$str = "hello WORLD 123";
echo toAlternatingCase($str) . "\n";
