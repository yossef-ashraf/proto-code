<?php

function peopleWithAgeDrink(int $old): string {
    if ($old < 14) {
        return "drink toddy";
    }
    if ($old < 18) {
        return "drink coke";
    }
    if ($old < 21) {
        return "drink beer";
    }
    return "drink whisky";
}

// Test example
echo peopleWithAgeDrink(13) . "\n"; // drink toddy
echo peopleWithAgeDrink(17) . "\n"; // drink coke
echo peopleWithAgeDrink(18) . "\n"; // drink beer
echo peopleWithAgeDrink(21) . "\n"; // drink whisky
