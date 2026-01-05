<?php
require_once("Film.php");
class Cinema
{
    public string $name;
    public string $city;
    public array $filmProgramme = [];

    public function __construct(string $name, string $city, array $filmProgramme = [])
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

    public function get_filmProgramme(): array
    {
        return $this->filmProgramme;
    }

    public function addFilm(Film $film)
    {
        $this->filmProgramme[] = $film;
    }

    public function findLongestFilm(): string
    {
        $longestFilm = $this->filmProgramme[0];

        foreach ($this->filmProgramme as $film) {
            if ($film->runtime > $longestFilm->runtime) {
                $longestFilm = $film;
            }
        }
        return $longestFilm;
    }

    public function __toString(): string
    {
        $fullProgramme = "<h3>" . $this->name .  " ( " . $this->city . ") : <br></h3>";

        if (empty($this->filmProgramme)) {
            $fullProgramme .= "No films scheduled.";
        } else {

            foreach ($this->filmProgramme as $film) {
                $fullProgramme .= $film . "<br>";
            }
        }
        $fullProgramme .= "<em class='highlight'>Longest film today: " . $this->findLongestFilm() . "</em>";
        return $fullProgramme;
    }
}
