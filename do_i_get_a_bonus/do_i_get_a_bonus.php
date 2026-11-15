<?php

function bonusTime(int $salary, bool $bonus): string {
    $total = $bonus ? $salary * 10 : $salary;
    return "\${$total}";
}

// Test example
echo bonusTime(10000, true) . "\n";  // $100000
echo bonusTime(25000, false) . "\n"; // $25000
