<?php

function fixTheMeerkat(array $arr): array {
    return array_reverse($arr);
}

// Test example
print_r(fixTheMeerkat(["tail", "body", "head"])); // ["head", "body", "tail"]
