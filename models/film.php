<?php

include __DIR__.'/genre.php';

class Movie {
    private $title;
    public $genres;
    private $date;

    function setTitle($title){
        if ($title != null){
            $this->title = $title; 
        }else{
            $this->title = 'UNKNOW';
        }
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

    function __construct( $title, $genres, $date){
        $this->title = $title;
        $this->genres = new Genre($genres);
        $this->date = $date;
    }
}




