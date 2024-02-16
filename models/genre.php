<?php

class Genre {
    public $genreName;

    function __construct($genres){
        $this->genreName = implode(', ', $genres);
    }
}