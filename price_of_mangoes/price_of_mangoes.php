<?php

function mango($quantity, $price) {
    $paid_quantity = $quantity - intdiv($quantity, 3);
    return $paid_quantity * $price;
}

// Test example
$quantity = 9;
$price = 5;
echo mango($quantity, $price) . "\n";
