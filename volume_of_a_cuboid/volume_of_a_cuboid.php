<?php

function get_volume_of_cuboid(float $length, float $width, float $height): float {
    return $length * $width * $height;
}

// Test example
echo get_volume_of_cuboid(2, 3, 4) . "\n"; // 24
echo get_volume_of_cuboid(6.3, 2, 5) . "\n"; // 63
