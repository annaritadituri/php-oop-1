<?php

class Actor {

    private string $name;
    private int $yearBirth;
    private $yearDeath;
    private array $moviesActing = [];
    private array $moviesDirecting = [];
    private int $awards;
    
    function __construct($name) {
        $this->name = $name;
    }

    //name methods
    public function getName() : string {
        return $this->name;
    }

    //yearBirth methods
    public function setYearBirth(int $yearBirth) : void {
        $this->yearBirth = $yearBirth;
    }

    public function getYearBirth() : int {
        return $this->yearBirth;
    }

    //yearDeath methods
    public function setYearDeath($yearDeath) : void {

        if(empty($yearBirth)) {
            throw new Exception("Inserisci prima l'anno di nascita");
        }

        if($yearDeath < 0) {
            $yearDeath = 'alive';
        } else if (!is_int($yearDeath)) {
            throw new Exception('Inserisci un numero valido');
        }

        $this->yearDeath = $yearDeath;
    }

    public function getYearDeath() {
        return $this->yearDeath;
    }

    //moviesActing methods
    public function setMovieActing(string $movieActing) : void {
        $this->moviesActing[] = $movieActing;
    }

    public function getMoviesActing() {

        if(count($this->moviesActing) === 0) {
            return 'Nessun film trovato';
        } else {
            return $this->moviesActing;
        }
    
    }

    //moviesDirecting methods
    public function setMovieDirecting(string $movieDirecting) : void {
        $this->moviesDirecting[] = $movieDirecting;
    }

    public function getMoviesDirecting() {

        if(count($this->moviesDirecting) === 0) {
            return 'Nessun film trovato';
        } else {
            return $this->moviesDirecting;
        }

    }

    //awards methods
    public function setAwards(int $awards) : void {
        $this->awards = $awards;
    }

    public function getAwards() : int {
        return $this->awards;
    }

};

?>