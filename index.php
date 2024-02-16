<?php

require_once __DIR__ ."./models/film.php";


$stringFilmList = file_get_contents('./db.json');

$filmList = json_decode($stringFilmList, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <ul>

            <?php
                foreach ($filmList as $filmData) {
                    $title = $filmData["title"];
                    $genres = $filmData["genre"];
                    $date = $filmData["date"];

                    $film = new Movie($title, $genres, $date);
            ?>
            
                    <li>
                        <div>
                            <?php echo $title; ?>
                        </div>
                        <div>
                            <?php echo $film->getGenre(); ?>
                        </div>
                        <div>
                            <?php echo $film->getDate(); ?>
                        </div>
                    </li>

            <?php
                }
            ?>
            </ul>
        </div>

    </main>
</body>
</html>