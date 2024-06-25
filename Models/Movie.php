<?php

require_once __DIR__ . '/Genre.php';
require_once __DIR__ . '/Actor.php';

class Movie {

    private string $name;
    private int $year;
    private string $director;
    private array $originalLangs;
    private $genre;
    private $actor;
    private array $genres = [];
    private array $actors = [];
    
    function __construct($name, Genre $genre, Actor $actor) {

        if(is_int($name)) {
            throw new Exception();
        };

        $this->name = $name;
        $this->genre = $genre;
        $this->genres[] = $this->genre->getName();
        $this->actor = $actor;
        $this->actors[] = $this->actor->getName();

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

    //Genre methods
    public function setGenreClass(Genre $genre) : void {
        $this->genres[] = $genre->getName();
    }

    //genres methods
    public function setGenre(string $genre) : void {
        $this->genres[] = $genre;
    }

    public function getGenres() {
        return $this->genres;
    }

    //Actor methods
    public function setActorClass(Actor $actor) : void {
        $this->actors[] = $actor->getName();
    }

    //actors methods
    public function setActor(string $actor) : void {
        $this->actors[] = $actor;
    }

    public function getActors() {
        return $this->actors;
    }

};

?>