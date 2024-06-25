<?php

require_once __DIR__ . '/Genre.php';
require_once __DIR__ . '/Actor.php';

class Movie {

    private string $name;
    private int $year;
    private string $director;
    private array $originalLangs;
    private ? Genre $genre = null;
    private ? Actor $actor = null;
    private array $genres = [];
    private array $actors = [];
    
    function __construct($name, Genre $genre, Actor $actor) {

        if(is_int($name)) {
            throw new Exception();
        };

        $this->name = $name;
        $this->genre = $genre;
        $this->genres[] = $this->genre;
        $this->actor = $actor;
        $this->actors[] = $this->actor;

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
    public function setGenreClass(? Genre $genre) : void {
        $this->genre = $genre;
        $this->genres[] = $this->genre;
    }

    public function getGenreClass() : ? Genre {
        return $this->genre;
    }

    //genres methods
    public function setGenre(string $genre) : void {
        $this->genres[] = $genre;
    }

    public function getGenres() : array {
        return $this->genres;
    }

    //Actor methods
    public function setActorClass(Actor $actor) : void {
        $this->actors[] = $actor->getName();
    }

    public function getActorClass() : ? Actor {
        return $this->actor;
    }

    //actors methods
    public function setActor(string $actor) : void {
        $this->actors[] = $actor;
    }

    public function getActors() : array {
        return $this->actors;
    }

};

?>