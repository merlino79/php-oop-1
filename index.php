<?php
  require_once __DIR__ ."/Movie.php";

  $film = new Movie("Il Cavaliere Oscuro");
  $film1 = new Movie("Batman v Superman");
  
  $film->direction = "Christopher Nolan";
  $film->year = "2012";
  $film->cast = "Christian Bale, Gary Oldman, Morgan Freeman";
  $film1->direction = "Zack Snyder";
  $film1->year = "2016";

  $film->setTakings(18500000);
  
  

  
  
  
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_oop_1</title>
</head>
<body>

<h1> <?php echo $film->getInfo() ?></h1>
<h1>incasso: <?php echo $film->getTakings() ?></h1>
<h3>direction  <?php echo $film->direction?></h3>
<h3>cast:  <?php echo $film->cast?></h3>

<h4>anno :<?php echo $film->year?></h4>

<h1> <?php echo $film1->getInfo() ?></h1>
<h3>direction: <?php echo $film1->direction?></h3>


<h4>anno :<?php echo $film1->year?></h4>




 

</body>
</html>