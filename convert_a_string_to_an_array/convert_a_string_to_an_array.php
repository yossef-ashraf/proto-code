<?php

function stringToArray(string $s): array {
    return explode(" ", $s);
}

// Test example
print_r(stringToArray("Robin Singh"));
