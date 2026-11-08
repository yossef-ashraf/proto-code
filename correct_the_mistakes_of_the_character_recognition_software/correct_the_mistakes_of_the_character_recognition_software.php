<?php

function correct(string $string): string {
    return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
}

// Test example
echo correct("L0ND0N") . "\n";     // LONDON
echo correct("DUBL1N") . "\n";     // DUBLIN
echo correct("51NGAP0RE") . "\n";  // SINGAPORE
