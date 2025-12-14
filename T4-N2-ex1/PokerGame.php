<?php

require 'PokerDice.php';

class PokerGame
{

    public array $diceInAGame = array();

    public  function __construct()
    {
        for ($numDice = 0; $numDice < 5; $numDice++) {
            $this->diceInAGame[] = new PokerDice();
        }
    }

    public function SeeResult(): void
    {
        $results = [];

        echo "You've rolled: \n- ";

        foreach ($this->diceInAGame as $die) {
            $die->roll();
            $results[] = $die->getlastRoll();
        }
        echo implode("\n- ", $results);


        echo "\n\n->Total rolls of all dice: " . PokerDice::getTotalRolls() . PHP_EOL;
    }
}
