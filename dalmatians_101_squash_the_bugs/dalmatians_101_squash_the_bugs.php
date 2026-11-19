<?php

function howManyDalmatians(int $number): string {
    $dogs = [
        "Hardly any",
        "More than a handful!",
        "Woah that's a lot of dogs!",
        "101 DALMATIANS!!!"
    ];

    if ($number <= 10) {
        return $dogs[0];
    }
    if ($number <= 50) {
        return $dogs[1];
    }
    if ($number === 101) {
        return $dogs[3];
    }
    return $dogs[2];
}

// Test example
echo howManyDalmatians(26) . "\n";  // More than a handful!
echo howManyDalmatians(101) . "\n"; // 101 DALMATIANS!!!
