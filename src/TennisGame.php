<?php
namespace TennisGame;

class TennisGame implements TennisGameInterface {
    private $player1_score = 0;
    private $player2_score = 0;
    private $score_terms = ["Love", "Fifteen", "Thirty", "Forty"];

    public function scoreboard(): string {
        if ($this->isComplete()) {
            return "Won by Player " . ($this->player1_score > $this->player2_score ? "1" : "2");
        }

        if ($this->player1_score >= 3 && $this->player2_score >= 3) {
            if ($this->player1_score == $this->player2_score) {
                return "Deuce";
            }
            return "Advantage Player " . ($this->player1_score > $this->player2_score ? "1" : "2");
        }

        if ($this->player1_score == $this->player2_score) {
            return $this->score_terms[$this->player1_score] . " All";
        }

        return $this->score_terms[$this->player1_score] . "-" . $this->score_terms[$this->player2_score];
    }

    public function isComplete(): bool {
        return ($this->player1_score >= 4 || $this->player2_score >= 4) && abs($this->player1_score - $this->player2_score) >= 2;
    }

    public function player1Point(): void {
        if (!$this->isComplete()) {
            $this->player1_score += 1;
        }
    }

    public function player2Point(): void {
        if (!$this->isComplete()) {
            $this->player2_score += 1;
        }
    }
}
