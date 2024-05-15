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


$blow = new Movie('Blow', 'Ted Demme', '125 min' , 'dramatic' );
$scarface = new Movie('Scarface','Brian De Palma', '165 min' , 'noir');
var_dump($blow) ;
var_dump($scarface) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> <?php echo $blow->getMovie(); ?></div>
    <div> <?php echo $scarface->getMovie(); ?></div>
    
</body>
</html>

