<?php

function rps(string $p1, string $p2): string {
    if ($p1 === $p2) {
        return "Draw!";
    }

    if (
        ($p1 === "scissors" && $p2 === "paper") ||
        ($p1 === "paper" && $p2 === "rock") ||
        ($p1 === "rock" && $p2 === "scissors")
    ) {
        return "Player 1 won!";
    }

    return "Player 2 won!";
}

// Test example
echo rps("scissors", "paper") . "\n"; // Player 1 won!
echo rps("scissors", "rock") . "\n";  // Player 2 won!
echo rps("paper", "paper") . "\n";    // Draw!
