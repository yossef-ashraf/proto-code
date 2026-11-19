<?php

function reverseWords(string $str): string {
    return implode(" ", array_reverse(explode(" ", $str)));
}

// Test example
echo reverseWords("The greatest victory is that which requires no battle") . "\n";
