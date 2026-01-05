<?php
class Film
{
    public string $name;
    public string $director;
    public int $runtime;

    public function __construct(string $name, string $director, int $runtime)
    {
        $this->name = $name;
        $this->director = $director;
        $this->runtime = $runtime;
    }

    function get_name(): string
    {
        return $this->name;
    }
    function get_director(): string
    {
        return $this->name;
    }
    function get_runtime(): int
    {
        return $this->runtime;
    }

    public function __toString(): string
    {
        return "FILM: " . $this->name . " | DIRECTOR: " . $this->director . " | RUNTIME: " . $this->runtime;
    }
}
