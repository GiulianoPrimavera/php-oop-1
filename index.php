<?php 
require_once "./classes/Movie.php";

$arrMovies = [];

$avengers = new Movie("The Avengers", "English", "9");
$spirit = new Movie("Spirit wild stallion", null, "9");
$forrestGump = new Movie("Forrest Gump", "English(USA)", 9);
// var_dump($avengers);

// echo $avengers->buildCover();
// echo "<br>";
// echo $spirit->buildCover();
// echo "<br>";
// echo $forrestGump->buildCover();

array_push($arrMovies, $avengers, $forrestGump, $spirit);
// var_dump($arrMovies);

foreach($arrMovies as $movie){
    echo $movie->buildCover() . "<br>";
}

?>