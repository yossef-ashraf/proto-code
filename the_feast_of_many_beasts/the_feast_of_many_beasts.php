<?php

function feast(string $beast, string $dish): bool {
    return $beast[0] === $dish[0] && substr($beast, -1) === substr($dish, -1);
}

// Test example
var_dump(feast("great blue heron", "garlic naan")); // bool(true)
var_dump(feast("chickadee", "chocolate cake"));     // bool(true)
var_dump(feast("brown bear", "bear claw"));         // bool(false)
