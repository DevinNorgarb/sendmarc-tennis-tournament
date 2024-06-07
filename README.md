# Tennis Game Scoring System

This project implements the scoring system for a tennis game as part of a software engineering practical for Sendmarc.

## Requirements

- PHP 7.4 or higher
- Composer


### Installation

1. Ensure you have PHP installed.
2. Install dependencies via Composer:


## Setup

1. Install dependencies:
    ```bash
    composer install
    ```

2. Run the simulation:
    ```bash
    ./start match
    ```

3. Run the unit tests:
    ```bash
    vendor/bin/phpunit
    ```

## Usage

The main command for simulating a tennis game is `match`. You can provide optional arguments for player names:
```bash
./start game "Roger" "Rafael"
```
or simply run the command without arguments to use the default player names:

```bash
./start game
```

## Testing
Unit tests are located in the tests directory. Run the tests using PHPUnit:

```bash
./vendor/bin/pest
```


### License
This project is licensed under the MIT License.



## Classes and Interfaces

### TennisGameInterface

#### Methods

- `scoreboard() -> string`: Returns the formatted score as a string. Examples: "Fifteen-Love", "Deuce", "Advantage Player 1", "Won by Player 1"

- `isComplete() -> bool`: Returns `True` if the game is complete, `False` otherwise.

- `player1Point() -> void`: Called when Player 1 scores a point.

- `player2Point() -> void`: Called when Player 2 scores a point.

### TennisGame

Implements the `TennisGameInterface`.

#### Methods

- `scoreboard() -> string`: Returns the formatted score as a string. Examples: "Fifteen-Love", "Deuce", "Advantage Player 1", "Won by Player 1"

- `isComplete() -> bool`: Returns `True` if the game is complete, `False` otherwise.

- `player1Point() -> void`: Called when Player 1 scores a point.

- `player2Point() -> void`: Called when Player 2 scores a point.
