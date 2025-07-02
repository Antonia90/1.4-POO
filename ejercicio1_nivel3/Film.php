<?php
declare(strict_types = 1);

class Film
{
    private string $name;
    private int $duration;
    private string $director;

    public function __construct(string $name, int $duration, string $director)
    {
        if (empty($name)) {
            throw new InvalidArgumentException("El nombre no puede estar vacío.");
        }
        if ($duration <= 0) {
            throw new InvalidArgumentException("La duración no puede ser negativa.");
        }
        if (empty($director)) {
            throw new InvalidArgumentException("El director no puede estar vacío.");
        }
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getDuration(): int
    {
        return $this->duration;
    }
    public function getDirector(): string
    {
        return $this->director;
    }

    public function __toString()
    {
        return "<h2>Película: " . $this->name . "</h2><h4>Duración: " . $this->duration . "</h4><h4> Director: " . $this->director . "</h4><br>";
    }
}
