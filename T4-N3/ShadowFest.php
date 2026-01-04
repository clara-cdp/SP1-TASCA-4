<?php

class ShadowFest
{
    public array $venues = [];

    public function __construct(array $venues = [])
    {
        $this->venues = $venues;
    }

    public function addCinema(Cinema $cinema)
    {
        $this->venues[] = $cinema;
    }

    public function findFilmByDirector(string $director)
    {
        //complete this
    }
}
