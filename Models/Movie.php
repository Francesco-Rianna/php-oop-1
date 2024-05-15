<?php
class Movie{
    public $title ;
    public $direction;
    public $duration;
    public $genre;

    

    function __construct($_title,$_direction,$_duration,$_genre){
        $this->title = $_title ;
        $this->direction = $_direction ;
        $this->duration = $_duration ; 
        $this->genre = $_genre ;

    }

    public function getMovie(){
        return $this->title . '<br/>' . ' - Directed by: ' . $this->direction . ' - Duration: ' . $this->duration . ' - Genre: ' . $this->genre;
    }
}
?>