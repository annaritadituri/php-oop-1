<?php

class Movie {

    private string $name;
    private int $year;
    private string $director;
    private array $originalLangs = [];
    private array $genres = [];
    
    function __construct($name) {

        if(is_int($name)) {
            throw new Exception();
        };
        $this->name = $name;

    }

    //name methods
    public function getName() : string {
        return $this->name;
    }

    //year methods
    public function setYear(int $year) : void {
        $this->year = $year;
    }

    public function getYear() : int {
        return $this->year;
    }

    //director methods
    public function setDirector(string $director) : void {
        $this->director = $director;
    }

    public function getDirector() : string {
        return $this->director;
    }

    //originalLang methods
    public function setOriginalLang(string $originalLang) : void {
        $this->originalLangs[] = $originalLang;
    }

    public function getOriginalLangs() : array {
        return $this->originalLangs;
    }

    //genres methods
    public function setGenre(string $genre) : void {
        $this->genres[] = $genre;
    }

    public function getGenres() : array {
        return $this->genres;
    }

};

try {
    $movie_1 = new Movie('Il padrino');
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

$movie_1->setGenre('noir');
$movie_1->setGenre('drammatico');
$movie_1->setGenre('gangster');
$movie_1->getGenres();

//second object
$movie_2 = new Movie("I predatori dell'arca perduta");
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
$movie_2->setGenre('commedia');
$movie_2->getGenres();

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

                    </ul>

                </li>

            <?php endforeach;
        ?>
        
    </ul>

</body>
</html>
