<?php

class PokerDice
{
    const FIGURES = array('As', 'K', 'Q', 'J', '7', '8');

    /*enum Figures {
        case 'As';
        case 'k';
        case 'Q';
        case '7';
        case '8';
    }*/

    private string $lastRoll = "";
    private static int $totalThrowCount = 0;

    public function roll()
    {
        $throw = array_rand(self::FIGURES);
        $figure = self::FIGURES[$throw];
        $this->lastRoll = $figure;

        self::$totalThrowCount++;

        return $figure;
    }


    public function getlastRoll(): string
    {
        return $this->lastRoll;
    }

    public static function getTotalRolls(): int
    {
        return  self::$totalThrowCount;
    }
}
