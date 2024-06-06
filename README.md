Tennis Game Simulation
=======================

This project simulates a tennis game and provides a console output of the game's scoreboard.

Getting Started
---------------

To run the Tennis Game simulation, follow these steps:

1. Clone the repository:

   git clone <repository_url>

2. Navigate to the project directory:

   cd tennis-game-simulation

3. Install dependencies:

   composer install

4. Run the simulation:

   php bin/console ball [player1_name] [player2_name]

   Replace [player1_name] and [player2_name] with optional names for Player 1 and Player 2. If names are not provided, default names will be used.

Features
--------

- Simulates a tennis game according to the specified rules.
- Displays the game scoreboard in the console.
- Supports customization of player names.
- Provides a clean and well-commented codebase.

Usage
-----

The main command to run the simulation is:

php bin/console ball [player1_name] [player2_name]

- [player1_name]: Optional name for Player 1 (default: "Player 1").
- [player2_name]: Optional name for Player 2 (default: "Player 2").

Example usage:

php bin/console ball Serena Venus

This command will simulate a tennis game between Serena and Venus and display the scoreboard in the console.

Contributing
------------

Contributions are welcome! If you have any suggestions, bug reports, or feature requests, please open an issue on GitHub.

License
-------

This project is licensed under the MIT License - see the LICENSE file for details.
