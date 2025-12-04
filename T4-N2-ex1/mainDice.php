<?php

include 'dice.php';

$die1 = new PokerDice();
$die2 = new PokerDice();
$die3 = new PokerDice();
$die4 = new PokerDice();
$die5 = new PokerDice();

echo "die 1, first roll : " . $die1->roll() . PHP_EOL;
echo "die 1, second roll: " . $die1->roll() . PHP_EOL;
echo "die 1, third roll: " . $die1->roll() . PHP_EOL;
$die2->roll();
$die3->roll();
$die4->roll();
$die5->roll();

echo "Die 1 last roll: " . $die1->getLastRoll() . PHP_EOL;
echo "Die 2 last roll: " . $die2->getLastRoll() . PHP_EOL;
echo "Die 3 last roll: " . $die3->getLastRoll() . PHP_EOL;
echo "Die 4 last roll: " . $die4->getLastRoll() . PHP_EOL;
echo "Die 5 last roll: " . $die5->getLastRoll() . PHP_EOL;

echo "Total rolls of all dice: " . PokerDice::getTotalRolls() . PHP_EOL;
