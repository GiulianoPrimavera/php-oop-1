<?php 
require_once "./classes/Movie.php";

$avengers = new Movie("The Avengers", "English", "9");
$spirit = new Movie("Spirit", null, "9");
$forrestGump = new Movie("Forrest Gump", "English(USA)", 9);
var_dump($avengers);

echo $avengers->buildCover();
echo $spirit->buildCover();
echo $forrestGump->buildCover();

?>