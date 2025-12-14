<?php

require('PokerGame.php');

$game = new PokerGame();

echo "** GAME 1:**\n";
$game->seeResult();

$game2 = new PokerGame;

echo "\n** GAME 2:**\n";
$game2->seeResult();
