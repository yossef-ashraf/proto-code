<?php

$nums = [0, 1, 4, 5, 3];

$n = count($nums);
$expected_sum = ($n * ($n + 1)) / 2;

$actual_sum = 0;
foreach ($nums as $num) {
    $actual_sum += $num;
}

$missing_number = $expected_sum - $actual_sum;

echo "Missing Number: " . $missing_number . "\n";
