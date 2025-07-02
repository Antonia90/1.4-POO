<?php

declare(strict_types=1);
require_once('Cinema.php');
require_once('Film.php');

$peliculas1 = [
    new Film("Inception", 148, "Christopher Nolan"),
    new Film("Interstellar", 169, "Christopher Nolan"),
    new Film("Parasite", 132, "Bong Joon-ho"),
    new Film("Amélie", 122, "Jean-Pierre Jeunet")
];

$peliculas2 = [
    new Film("The Godfather", 175, "Francis Ford Coppola"),
    new Film("Pulp Fiction", 154, "Quentin Tarantino"),
    new Film("Spirited Away", 125, "Hayao Miyazaki"),
    new Film("Roma", 135, "Alfonso Cuarón")
];

$cinema1 = new Cinema("Cinesa Diagonal", "Barcelona", $peliculas1);
$cinema2 = new Cinema("Yelmo Icaria", "Barcelona", $peliculas2);

$cines = [$cinema1, $cinema2];

require('template.php');

function filterByDirector(array $cines, string $director): array
{
    $sameDirectorFilms = [];
    foreach ($cines as $cine) {
        foreach ($cine->getCatalog() as $film) {
            if ($film->getDirector() === $director) {
                $sameDirectorFilms[] = $film;
            }
        }
    }
    return $sameDirectorFilms;
}
?>

