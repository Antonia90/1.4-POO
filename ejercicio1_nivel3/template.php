<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catálogo</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h1>Catálogo de Películas</h1>
    </header>

    <main>
        <?php foreach ($cines as $cine): ?>
            <section class="cinema">
                <h2><?= htmlspecialchars($cine->getName()) ?></h2>
                <h3><?= htmlspecialchars($cine->getBorough()) ?></h3>

                <div class="movies">
                    <h4 class="catalog">Catálogo</h4>
                    <div class="info-movie"><?php $cine->showMovies(); ?><div>
                </div>

                <div class="longer">
                    <h4>Película con mayor duración:</h4>
                    <?= $cine->getLongerFilm() ?>
                </div>
            </section>
        <?php endforeach; ?>

        <section class="search">
            <h2>Buscar películas por director</h2>
            <form method="GET">
                <input type="text" name="director" placeholder="Nombre del director" required>
                <button type="submit">Buscar</button>
            </form>

            <?php if (isset($_GET['director'])) {
                $director = trim($_GET['director']);
                $filmsByDirector = filterByDirector($cines, $director);
            ?>
                <p>Películas dirigidas por <strong><?= htmlspecialchars($director) ?></strong>:</p>
                <div class="movies">
                    <?php
                    if (count($filmsByDirector) === 0) {
                        echo "<p>No se encontraron películas de ese director.</p>";
                    } else {
                        foreach ($filmsByDirector as $film) {
                            echo $film;
                        }
                    }
                    ?>
                </div>
            <?php } ?>
        </section>
    </main>
</body>

</html>