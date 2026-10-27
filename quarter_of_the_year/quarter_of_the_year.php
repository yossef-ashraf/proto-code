<?php

function quarterOf($month) {
    return (int)ceil($month / 3);
}

// Test example
$month = 11;
echo quarterOf($month) . "\n";
