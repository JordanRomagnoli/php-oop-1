<?php

class Movie {

    private $title;
    private $genre;
    private $date;

    function getInfo($index){
        $stringFilmList = file_get_contents('db.json');

        $filmList = json_decode($stringFilmList, true);

        for ($i=0; $i < count($filmList); $i++) { 
            $this->title = $filmList[$index]["title"];
            $this->genre = $filmList[$index]["genre"];
            $this->date = $filmList[$index]["date"];
        }
    }

    function __construct($i){
        $this->getInfo($i);
    }

};

$film_1 = new Movie(0);
$film_2 = new Movie(1);

var_dump($film_1);
var_dump($film_2);