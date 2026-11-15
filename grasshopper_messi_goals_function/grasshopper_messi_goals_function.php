<?php

function goals(int $laLigaGoals, int $copaDelReyGoals, int $championsLeagueGoals): int {
    return $laLigaGoals + $copaDelReyGoals + $championsLeagueGoals;
}

// Test example
echo goals(5, 10, 2) . "\n"; // 17
echo goals(0, 0, 0) . "\n";  // 0
