
<?php

$arr = [1, 0, 9, 0, 8];

$pointer_read = 0;
$pointer_write = 0;

for ($pointer_read = 0; $pointer_read < count($arr); $pointer_read++) {
    if ($arr[$pointer_read] != 0) {
        $arr[$pointer_write] = $arr[$pointer_read];
        $pointer_write++;
    }
}

while ($pointer_write < count($arr)) {
    $arr[$pointer_write] = 0;
    $pointer_write++;
}

print_r($arr);
