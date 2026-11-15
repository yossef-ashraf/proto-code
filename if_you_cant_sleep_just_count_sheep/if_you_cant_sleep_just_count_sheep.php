<?php

function countSheep(int $num): string {
    $result = "";
    for ($i = 1; $i <= $num; $i++) {
        $result .= "{$i} sheep...";
    }
    return $result;
}

// Test example
echo countSheep(1) . "\n"; // 1 sheep...
echo countSheep(3) . "\n"; // 1 sheep...2 sheep...3 sheep...
echo countSheep(0) . "\n"; // (empty)
