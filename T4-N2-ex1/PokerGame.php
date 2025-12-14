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




   /* echo "Die 1 last roll: " . $die1->getLastRoll() . PHP_EOL;
    echo "Die 2 last roll: " . $die2->getLastRoll() . PHP_EOL;
    echo "Die 3 last roll: " . $die3->getLastRoll() . PHP_EOL;
    echo "Die 4 last roll: " . $die4->getLastRoll() . PHP_EOL;
    echo "Die 5 last roll: " . $die5->getLastRoll() . PHP_EOL;

    echo "Total rolls of all dice: " . PokerDice::getTotalRolls() . PHP_EOL;
}

}


 /* $die1 = new PokerDice();
        $die2 = new PokerDice();
        $die3 = new PokerDice();
        $die4 = new PokerDice();
        $die5 = new PokerDice();*/
