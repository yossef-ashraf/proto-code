<?php

function swapValues(array &$arr): void {
    $temp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $temp;
}

// Test example
$values = [1, 2];
swapValues($values);
print_r($values); // [2, 1]
