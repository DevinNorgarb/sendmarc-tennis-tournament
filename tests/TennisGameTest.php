<?php

use TennisGame\TennisGame;

it('initial score is Love All', function () {
    $game = new TennisGame();
    expect($game->scoreboard())->toBe('Love All');
});

it('score is Fifteen-Love after Player 1 scores', function () {
    $game = new TennisGame();
    $game->player1Point();
    expect($game->scoreboard())->toBe('Fifteen-Love');
});

it('score is Love-Fifteen after Player 2 scores', function () {
    $game = new TennisGame();
    $game->player2Point();
    expect($game->scoreboard())->toBe('Love-Fifteen');
});

it('score is Deuce when both players have three points', function () {
    $game = new TennisGame();
    $game->player1Point();
    $game->player1Point();
    $game->player1Point();
    $game->player2Point();
    $game->player2Point();
    $game->player2Point();
    expect($game->scoreboard())->toBe('Deuce');
});

it('score is Advantage Player 1 when Player 1 has one point more than Player 2 after Deuce', function () {
    $game = new TennisGame();
    $game->player1Point();
    $game->player1Point();
    $game->player1Point();
    $game->player2Point();
    $game->player2Point();
    $game->player2Point();
    $game->player1Point();
    expect($game->scoreboard())->toBe('Advantage Player 1');
});

it('Player 1 wins the game when they have at least two points more than Player 2 after reaching 4 points', function () {
    $game = new TennisGame();
    $game->player1Point();
    $game->player1Point();
    $game->player1Point();
    $game->player2Point();
    $game->player2Point();
    $game->player2Point();
    $game->player1Point();
    $game->player1Point();
    expect($game->scoreboard())->toBe('Won by Player 1');
    expect($game->isComplete())->toBeTrue();
});

it('does not allow scoring after the game is complete', function () {
    $game = new TennisGame();
    $game->player1Point();
    $game->player1Point();
    $game->player1Point();
    $game->player1Point(); // Player 1 wins

    $game->player2Point(); // This point should not be counted
    expect($game->scoreboard())->toBe('Won by Player 1');
    expect($game->isComplete())->toBeTrue();
});
