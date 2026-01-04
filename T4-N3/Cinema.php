<?php

class Cinema
{
    public string $name;
    public int $city;
    public array $filmProgramme = [];

    public function __construct(string $name, int $city, array $filmProgramme)
    {
        $this->name = $name;
        $this->city = $city;
        $this->filmProgramme = $filmProgramme;
    }

    function get_name(): string
    {
        return $this->name;
    }

    function get_city(): string
    {
        return $this->city;
    }

    function get_filprograme(): array
    {
        return $this->filmProgramme;
    }

    public function addFilm(Film $film)
    {
        $this->filmProgramme[] = $film;
    }

    public function findLongestFilm(): Film
    {
        $longestFilm = $this->filmProgramme[0];

        foreach ($this->filmProgramme as $film) {
            if ($film->runtime > $longestFilm->runtime) {
                $longestFilm = $film;
            }
        }
        return $longestFilm;
    }
}
