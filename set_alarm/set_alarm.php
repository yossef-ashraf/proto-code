<?php

function setAlarm(bool $employed, bool $vacation): bool {
    return $employed && !$vacation;
}

// Test example
var_dump(setAlarm(true, false)); // bool(true)
var_dump(setAlarm(true, true));  // bool(false)
