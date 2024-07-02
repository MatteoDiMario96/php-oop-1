<?php 

class Movie{
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
    public $rating;

    public function __construct($_title, $_genre, $_releaseYear, $_director, $_rating){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->releaseYear = $_releaseYear;
        $this->director = $_director;
        $this->rating = $_rating;
    }
} 

?>