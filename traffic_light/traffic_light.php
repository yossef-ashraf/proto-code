<?php

function update_light(string $current): string {
    switch ($current) {
        case "green":
            return "yellow";
        case "yellow":
            return "red";
        case "red":
            return "green";
        default:
            return "";
    }
}

// Test example
echo update_light("green") . "\n";  // yellow
echo update_light("yellow") . "\n"; // red
echo update_light("red") . "\n";    // green
