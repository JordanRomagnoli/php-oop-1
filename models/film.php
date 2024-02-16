<?php

include __DIR__.'./genre.php';

class Movie {
    private $title;
    private $genres = [];
    private $date;

    public function getGenre() {
        return implode(', ', $this->genres);
    }

    function setTitle($title){
        $this->title = $title; 
    }

    function getTitle(){
        return $this->title; 
    }

    function setDate($date){
        $this->date = $date; 
    }

    function getDate(){
        return $this->date; 
    }

    function __construct($title, $genres, $date){
        $this->title = $title;
        $this->genres = $genres;
        $this->date = $date;
    }
}




