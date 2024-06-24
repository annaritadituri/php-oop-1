<?php

class Movie {

    private string $name;
    private int $year;
    private string $director;
    private string $originalLang;
    private string $genre;
    
    function __construct($name)
    {
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
        $this->originalLang = $originalLang;
    }

    public function getOriginalLang() : string {
        return $this->originalLang;
    }

    //genres methods
    public function setGenre(string $genre) : void {
        $this->genre = $genre;
    }

    public function getGenre() : string {
        return $this->genre;
    }

};

//first object
$movie_1 = new Movie('Il padrino');
$movie_1->getName();

$movie_1->setYear(1972);
$movie_1->getYear();

$movie_1->setDirector('Francis Ford Coppola');
$movie_1->getDirector();

$movie_1->setOriginalLang('inglese');
$movie_1->getOriginalLang();

$movie_1->setGenre('gangster');
$movie_1->getGenre();

//second object
$movie_2 = new Movie("I predatori dell'arca perduta");
$movie_2->getName();

$movie_2->setYear(1981);
$movie_2->getYear();

$movie_2->setDirector('Steven Spielberg');
$movie_2->getDirector();

$movie_2->setOriginalLang('inglese');
$movie_2->getOriginalLang();

$movie_2->setGenre('avventura');
$movie_2->getGenre();

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
        <li>

            <?php echo $movie_1->getName(); ?>

            <ul>

                <li>
                    <?php echo $movie_1->getYear(); ?>
                </li>
                <li>
                    <?php echo $movie_1->getDirector(); ?>
                </li>
                <li>
                    <?php echo $movie_1->getOriginalLang(); ?>
                </li>
                <li>
                    <?php echo $movie_1->getGenre(); ?>
                </li>

            </ul>

        </li>

        <li>

            <?php echo $movie_2->getName(); ?>

            <ul>

                <li>
                    <?php echo $movie_2->getYear(); ?>
                </li>
                <li>
                    <?php echo $movie_2->getDirector(); ?>
                </li>
                <li>
                    <?php echo $movie_2->getOriginalLang(); ?>
                </li>
                <li>
                    <?php echo $movie_2->getGenre(); ?>
                </li>

            </ul>

        </li>
    </ul>

</body>
</html>
