<?php

function centuryFromYear($year) {
    return (int)ceil($year / 100);
}

// Test example
$year = 1705;
echo centuryFromYear($year) . "\n";
