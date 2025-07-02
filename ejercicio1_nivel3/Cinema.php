<?php

declare(strict_types=1);
require_once('Film.php');

class Cinema
{
    private string $name;
    private string $borough;
    private array $catalog;

    public function __construct(string $name, string $borough, array $catalog)
    {
        if (empty($name)) {
            throw new InvalidArgumentException("El nombre no puede estar vacío.");
        }
        if (empty($borough)) {
            throw new InvalidArgumentException("El barrio no puede estar vacío.");
        }
        if (count($catalog) === 0) {
            throw new InvalidArgumentException("El catálogo debe tener al menos una película.");
        }

        $this->name = $name;
        $this->borough = $borough;
        $this->catalog = $catalog;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getBorough(): string
    {
        return $this->borough;
    }
    public function getCatalog(): array
    {
        return $this->catalog;
    }

    public function __toString()
    {
        return "<h1>Cine: " . $this->name . "</h1><h3> Barrio: " . $this->borough . "</h3><h4> Catálogo: " . $this->catalog . "</h4>";
    }

    public function showMovies(): void
    {
        foreach ($this->catalog as $film) {
            echo $film->__toString();
        }
    }

    public function getLongerFilm(): Film
    {
        $longerFilm = $this->catalog[0];
        foreach ($this->catalog as $film) {
            if ($film->getDuration() > $longerFilm->getDuration()) {
                $longerFilm =  $film;
            }
        }

        return $longerFilm;
    }


}
