<?php

function twoSort(array $s): string {
    sort($s);
    return implode("***", str_split($s[0]));
}

// Test example
$list = ["bitcoin", "take", "over", "the", "world", "maybe", "who", "knows", "perhaps"];
echo twoSort($list) . "\n"; // b***i***t***c***o***i***n
