<?php

function zeroFuel(int $distanceToPump, int $mpg, int $fuelLeft): bool {
    return ($mpg * $fuelLeft) >= $distanceToPump;
}

// Test example
$distance = 50;
$mpg = 25;
$fuelLeft = 2;
var_dump(zeroFuel($distance, $mpg, $fuelLeft));
