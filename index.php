<?php
require_once __DIR__ . '/Models/Movie.php';


$blow = new Movie('Blow', 'Ted Demme', '125 min' , 'dramatic' );
$scarface = new Movie('Scarface','Brian De Palma', '165 min' , 'noir');

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

