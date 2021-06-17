<?php
  include_once __DIR__ ."/Movie.php";

  $film = new Movie("Batman Begins");
  $film1 = new Movie("title");

  
  $film->direction = "Christopher Nolan";
  $film1->title = "Batman v Superman - Dawn of Justice";
  
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>film: <?php echo $film->title ?></h1>
<h3>Diection by : <?php echo $film->direction ?></h3>

<h1> <?php echo $film1->getInfo() ?></h1>


 

</body>
</html>