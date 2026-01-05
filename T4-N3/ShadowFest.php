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
        $foundFilm = [];
        if (empty($this->venues)) {
            echo "Error: No films scheduled yet";
        }

        foreach ($this->venues as $v) {
            foreach ($v->get_filmprogramme as $f) {
                if ($f->get_director() == $director) {
                    $foundFilm[] = $f->get_name();
                } else {
                    echo "No films matched.";
                }
            }
        }
        if (empty($foundFilms)) {
            return "No films found directed by: " . $director;
        }

        return $foundFilm; // check this line output
    }

    public function __toString(): string
    {
        $venueShowtimes = "NOW SHOWING: <br>";

        if (empty($this->venues)) {
            $venueShowtimes = "--- no films schedule for this venue --- ";
        }

        foreach ($this->venues as $v) {
            $venueShowtimes .= $v . "<br>";
        }
        return $venueShowtimes;
    }
}
