<?php

class Genre {

    public $genres = [];

    
    public function getGenre() {

        
        $genresList = $this->genres;

        return implode(', ', $genresList);
    }

    
    function __construct($genres) {
        $this->genres = $genres;
    }

};