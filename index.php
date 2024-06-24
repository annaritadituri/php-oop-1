<?php

class Movie {

    private string $name;
    private int $year;
    private string $director;
    private array $originalLangs;
    private array $genres;
    
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
        $this->originalLangs[] = $originalLang;
    }

    public function getOriginalLang() : array {
        return $this->originalLangs;
    }

    //genres methods
    public function setGenres(string $genre) : void {
        $this->genres[] = $genre;
    }

    public function getGenres() : array {
        return $this->genres;
    }

};

?>