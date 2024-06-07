<?php

namespace TennisGame\Command;

use TennisGame\TennisGame;
use Symfony\Component\Console\{
    Command\Command,
    Input\InputArgument,
    Input\InputInterface,
    Output\OutputInterface,
    Helper\Table
};

class TennisGameCommand extends Command
{
    protected static $defaultName = 'game';

    /**
     * Configures the command.
     */
    protected function configure()
    {
        $this
            ->setDescription('Simulate a tennis game and print the scoreboard.')
            ->addArgument('player1', InputArgument::OPTIONAL, 'Name of Player 1', 'Player 1')
            ->addArgument('player2', InputArgument::OPTIONAL, 'Name of Player 2', 'Player 2');
    }

    /**
     * Executes the command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $player1Name = $input->getArgument('player1');
        $player2Name = $input->getArgument('player2');

        $game = new TennisGame();

        // Display the initial scoreboard
        $this->renderTable($output, $player1Name, $player2Name, $game->scoreboard(), $game->isComplete());

        // Simulate the game until it's complete
        while (!$game->isComplete()) {
            // Alternate between Player 1 and Player 2 to score points
            $playerIndex = rand(0, 1);
            $playerName = $playerIndex === 0 ? $player1Name : $player2Name;
            $output->writeln("$playerName scores!");

            if ($playerIndex === 0) {
                $game->player1Point();
            } else {
                $game->player2Point();
            }

            // Clear the console before displaying the current scoreboard
            $this->clearConsole();
            $this->renderTable($output, $player1Name, $player2Name, $game->scoreboard(), $game->isComplete());

            // Optional: Add a slight delay to make the output easier to follow
            usleep(500000); // 0.5 second delay
        }

        // Display the final scoreboard to console.
        $output->writeln("Game Complete! " . $game->scoreboard());

        return Command::SUCCESS;
    }

    /**
     * Helper function to render the scoreboard in a table format.
     *
     * @param OutputInterface $output
     * @param string $player1Name
     * @param string $player2Name
     * @param string $scoreboard
     * @param bool $isComplete
     */
    private function renderTable(OutputInterface $output, string $player1Name, string $player2Name, string $scoreboard, bool $isComplete): void
    {
        $scores = explode('-', $scoreboard);
        $player1Score = $scores[0];
        $player2Score = isset($scores[1]) ? $scores[1] : '';

        $table = new Table($output);
        $table
            ->setStyle('box')
            ->setHeaders([$player1Name, $player2Name, 'Game Complete'])
            ->setRows([
                [$player1Score, $player2Score, $isComplete ? 'Yes' : 'No'],
            ]);
        $table->render();
    }

    /**
     * Helper function to clear the console.
     */
    private function clearConsole(): void
    {
        // The following command clears the console screen for most terminal emulators.
        // It might not work in all environments, such as certain IDE consoles.
        echo "\033[2J\033[;H";
    }
}
