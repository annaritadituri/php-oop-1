<?php

class Genre {

    private string $name;
    
    function __construct($name) {
        $this->name = $name;
    }

    //name methods
    public function getName() : string {
        return $this->name;
    }

};

?>