<?php

namespace TennisGame\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use TennisGame\TennisGame;

class TennisGameCommand extends Command {
    protected static $defaultName = 'ball';

    protected function configure() {
        $this
            ->setDescription('Simulate a tennis game and print the scoreboard.')
            ->addArgument('player1', InputArgument::OPTIONAL, 'Name of Player 1', 'Player 1')
            ->addArgument('player2', InputArgument::OPTIONAL, 'Name of Player 2', 'Player 2');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int {
        $player1Name = $input->getArgument('player1');
        $player2Name = $input->getArgument('player2');

        $game = new TennisGame();
        $player1_points = 0;
        $player2_points = 0;

        // Display the initial scoreboard
        $this->renderTable($output, $player1Name, $player2Name, $game->scoreboard(), 'No');

        // Simulate the game until it's complete
        while (!$game->isComplete()) {
            // Alternate between Player 1 and Player 2 to score points
            $playerIndex = rand(0, 1);
            $playerName = $playerIndex === 0 ? $player1Name : $player2Name;
            $output->writeln("$playerName scores!");

            if ($playerIndex === 0) {
                $player1_points++;
                $game->player1Point();
            } else {
                $player2_points++;
                $game->player2Point();
            }

            // Display the current scoreboard after each point
            $this->renderTable($output, $player1Name, $player2Name, $game->scoreboard(), 'No');
        }

        // Display the final scoreboard
        $this->renderTable($output, $player1Name, $player2Name, $game->scoreboard(), 'Yes');

        return Command::SUCCESS;
    }

    // Helper function to render the scoreboard in a table format
    private function renderTable(OutputInterface $output, string $player1Name, string $player2Name, string $scoreboard, string $isComplete): void {
        $table = new Table($output);
        $table
            ->setStyle('box')
            ->setRows([
                [$player1Name, $player2Name, 'Game Complete'],
                [$scoreboard, '', $isComplete],
            ])
            ->setColumnWidths([20, 20, 15]);
        $table->render();
    }
}
