<?php

enum DieFigure: string
{
    case As = 'As';
    case K  = 'K';
    case Q = 'Q';
    case J = 'J';
    case seven = '7';
    case eight  = '8';
}
class PokerDice
{
    private DieFigure $lastRoll;
    private static int $totalThrowCount = 0;

    public function roll(): DieFigure
    {
        $allFigures = DieFigure::cases();
        $throw = array_rand($allFigures);
        $figure = $allFigures[$throw];
        $this->lastRoll = $figure;

        self::$totalThrowCount++;

        return $figure;
    }


    public function getlastRoll(): string
    {
        return $this->lastRoll?->value;
    }

    public static function getTotalRolls(): int
    {
        return  self::$totalThrowCount;
    }
}
