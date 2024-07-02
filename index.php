<?php 

require_once __DIR__ . '/class/Movie.php';
require_once __DIR__ . '/class/Genre.php';

$scream = new Movie ("Scream", ["Horror", "Slasher", "Thriller"], 1996, "Wes Craven", "7.4/10");

$myHeroAcademia = new Movie ("My Hero Academia The Movie Two Heroes", ["Animazione", "Fantasy", "Avventura"], 2018, "Kenji Nagasaki", "7.3/10");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <main>
        <ul>
            <li>
                <?php $scream->display() ?>
            </li>
            <li>
                <?php $myHeroAcademia->display() ?>
            </li>
        </ul>
    </main>
</body>
</html>