<?php

# *** TASCA 4, NIVELL 1, EXERCICI 1 ***

/*Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
 - Ha de tenir un mètode que no faci altra cosa que tirar el dau.
 - Crea també altre mètode que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
 - Després, amplia el programa per a poder tirar cinc daus de pòquer alhora.
 - A més, volem que la classe PokerDice tingui un mètode que ens permeti veure la quantitat de tirades de TOTS els daus.*/

class PokerDice
{
    const FIGURES = array('As', 'K', 'Q', 'J', '7', '8');

    private string $lastRoll;
    private static int $totalThrowCount = 0;

    public function roll()
    {
        $throw = array_rand(self::FIGURES);
        $figure = self::FIGURES[$throw];
        $this->lastRoll = $figure;

        self::$totalThrowCount++;

        return $figure;
    }

    public function getlastRoll(): string // Can you explain why we use :string? is this how I cast the output? 
    {
        return $this->lastRoll;
    }

    public static function getTotalRolls(): int
    {
        return  self::$totalThrowCount;
    }
}
