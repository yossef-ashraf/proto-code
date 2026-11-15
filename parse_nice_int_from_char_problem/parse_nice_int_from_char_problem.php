<?php

function getAge(string $response): int {
    return (int)$response[0];
}

// Test example
echo getAge("4 years old") . "\n"; // 4
echo getAge("5 years old") . "\n"; // 5
echo getAge("9 years old") . "\n"; // 9
