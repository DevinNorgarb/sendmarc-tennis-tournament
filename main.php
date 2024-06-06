<?php

require_once __DIR__ . '/vendor/autoload.php';

use TennisGame\TennisGame;

// Example usage
$game = new TennisGame();
echo $game->scoreboard() . "\n";  // Love All
$game->player1Point();
echo $game->scoreboard() . "\n";  // Fifteen-Love
$game->player2Point();
echo $game->scoreboard() . "\n";  // Fifteen All
$game->player1Point();
echo $game->scoreboard() . "\n";  // Thirty-Fifteen
$game->player1Point();
echo $game->scoreboard() . "\n";  // Forty-Fifteen
$game->player2Point();
$game->player2Point();
echo $game->scoreboard() . "\n";  // Deuce
$game->player1Point();
echo $game->scoreboard() . "\n";  // Advantage Player 1
$game->player1Point();
echo $game->scoreboard() . "\n";  // Won by Player 1
echo $game->isComplete() ? "True" : "False";  // True

