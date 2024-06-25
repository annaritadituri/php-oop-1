<?php

require_once __DIR__ . '/Models/Movie.php';

$genre_1 = new Genre('gangster');
$genre_2 = new Genre('commedia');
$actor_1 = new Actor('Marlon Brando');
$actor_2 = new Actor('Harrison Ford');

try {
    $movie_1 = new Movie('Il padrino', $genre_1, $actor_1);
} catch(Exception $e) {
    echo 'Devi inserire una stringa. Riprova:';
}

//first object
//$movie_1 = new Movie('Il padrino');
$movie_1->getName();

$movie_1->setYear(1972);
$movie_1->getYear();

$movie_1->setDirector('Francis Ford Coppola');
$movie_1->getDirector();

$movie_1->setOriginalLang('inglese');
$movie_1->setOriginalLang('italiano');
$movie_1->getOriginalLangs();

$movie_1->setGenreClass(new Genre('noir'));
$movie_1->setGenre('drammatico');
$movie_1->getGenres();

$movie_1->setActor('Al Pacino');

//second object
$movie_2 = new Movie("I predatori dell'arca perduta", $genre_2, $actor_2);
$movie_2->getName();

$movie_2->setYear(1981);
$movie_2->getYear();

$movie_2->setDirector('Steven Spielberg');
$movie_2->getDirector();

$movie_2->setOriginalLang('inglese');
$movie_2->getOriginalLangs();

$movie_2->setGenre('avventura');
$movie_2->setGenre('azione');
$movie_2->setGenre('fantastico');
$movie_2->getGenres();
var_dump($movie_2->getGenres());

$movie_2->setActorClass(new Actor('Karen Allen'));

$moviesList = [$movie_1, $movie_2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies OOP</title>
</head>
<body>

    <h1>Movies</h1>
    <ul>
        <?php
            foreach ($moviesList as $movie) : ?>

                <li>

                    <?php echo $movie->getName(); ?>

                    <ul>

                        <li>
                            <?php echo $movie->getYear(); ?>
                        </li>
                        <li>
                            <?php echo $movie->getDirector(); ?>
                        </li>
                        <li>
                            <?php 
                                foreach ($movie->getOriginalLangs() as $lang) echo $lang . " "
                            ?>
                        </li>
                        <li>
                            <?php 
                                foreach ($movie->getGenres() as $genre) echo $genre . " "
                            ?>
                        </li>
                        <li>
                            <?php 
                                foreach ($movie->getActors() as $actor) echo $actor . " "
                            ?>
                        </li>

                    </ul>

                </li>

            <?php endforeach;
        ?>

    </ul>

</body>
</html>
