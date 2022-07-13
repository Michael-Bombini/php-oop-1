<?php

include "Movie.php";

$movieUno = new Movie("Avengers: Endgame", "https://image.tmdb.org/t/p/w500/or06FN3Dka5tukK1e9sl16pB3iy.jpg", "24/04/2019");
$movieDue = new Movie("The Batman", "https://i.pinimg.com/736x/cf/07/64/cf07648658251eba4f94291ecfb16e56.jpg", "04/03/2022");
$movieTre = new Movie("Back to the future", "https://static.posters.cz/image/750/poster/back-to-the-future-i2795.jpg", "18/10/1985");
$movies = [] ;
array_push($movies,$movieUno,$movieDue,$movieTre);


?>
  <!-- <div class="col"><?php $movieUno->printMovieCard() ?> </div>
    <div class="col"><?php $movieDue->printMovieCard() ?></div>
    <div class="col"><?php $movieTre->printMovieCard() ?></div> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<div class="container my-4">
<div class="row row-cols-3">
  <?php

    foreach($movies as $movie){
        echo "<div class='col'>";
        echo $movie->printMovieCard();
        echo "</div>";

    }
?>
</div>


</div>
</body>

</html>