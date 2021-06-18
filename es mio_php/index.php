
<?php 
    require_once __DIR__."/Movie.php";

    $film = new Movie("Il Cavaliere Oscuro");
    $film1 = new Movie("Batman v Superman");
    $film1->direction = "Christopher Nolan";
    $film1->year = "2021";
    $film1->cast = " Christian Bale, Heath Ledger, Gary Oldman, Michael Caine, Aaron Eckhart. ";
    $film1->getGenres('Drammatico|Avventura|Documentario');
    //var_dump($film1)


    
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>prova</title>
</head>
<body>

  <h1>film: <?php echo $film->title?></h1>
  <p><?php echo $film1->getInfo()?></p>
  <h1>film2: <?php echo $film1->title ?></h1>

  <div class="">
      Generi:
      <ul>
        <?php foreach ($film1->getGenres() as $genre) : ?>

          <li><?php echo $genre ?></li>

        <?php endforeach; ?>
      </ul>
    </div>
  
  
</body>
</html>