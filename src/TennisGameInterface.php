<?php

namespace TennisGame;

interface TennisGameInterface
{
    public function scoreboard(): string;
    public function isComplete(): bool;
    public function player1Point(): void;
    public function player2Point(): void;
}
