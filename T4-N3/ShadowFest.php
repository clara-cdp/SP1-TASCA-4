<?php
require_once('Cinema.php');
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
        $searchTerm = trim((string)$director);
        $foundFilms = [];

        foreach ($this->venues as $cinema) {

            $programme = $cinema->filmProgramme;

            foreach ($programme as $film) {
                $directorInObject = (string)$film->director;

                if (stripos($directorInObject, $searchTerm) !== false) {
                    $foundFilms[] = $film . " | " . $cinema->name;
                }
            }
        }
        if (empty($foundFilms)) {
            return "No films found directed by: " . htmlspecialchars($searchTerm);
        }

        return implode("<br>", $foundFilms);
    }


    public function __toString(): string
    {
        $venueShowtimes = "";

        if (empty($this->venues)) {
            $venueShowtimes = "--- no films schedule for this venue --- ";
        }

        foreach ($this->venues as $v) {
            $venueShowtimes .= $v . "<br>";
        }
        return $venueShowtimes;
    }
}
