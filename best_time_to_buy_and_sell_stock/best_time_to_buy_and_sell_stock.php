<?php

$prices = [7, 4, 6, 2, 5, 9, 3, 1];

$min_price = $prices[0];
$max_profit = 0;

foreach ($prices as $price) {
    if ($price < $min_price) {
        $min_price = $price;
    } elseif ($price - $min_price > $max_profit) {
        $max_profit = $price - $min_price;
    }
}

echo "Max Profit: " . $max_profit . "\n";
