<?php

function switchItUp(int $number): string {
    $words = [
        0 => "Zero",
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine"
    ];

    return $words[$number] ?? "";
}

// Test example
echo switchItUp(1) . "\n"; // One
echo switchItUp(3) . "\n"; // Three
echo switchItUp(0) . "\n"; // Zero
