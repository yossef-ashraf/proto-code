<?php

function hero(int $bullets, int $dragons): bool {
    return $bullets >= $dragons * 2;
}

// Test example
$bullets = 10;
$dragons = 5;
var_dump(hero($bullets, $dragons)); // bool(true)
