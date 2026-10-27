<?php

function countSheeps(array $arr): int {
    $count = 0;
    foreach ($arr as $sheep) {
        if ($sheep === true) {
            $count++;
        }
    }
    return $count;
}

// Test example
$sheep = [
    true,  true,  true,  false,
    true,  true,  true,  true,
    true,  false, true,  false,
    true,  false, false, true,
    true,  true,  true,  true,
    false, false, true,  true
];

echo countSheeps($sheep) . "\n";
