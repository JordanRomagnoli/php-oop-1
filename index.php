<?php

require_once __DIR__ ."/models/film.php";


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
                foreach ($filmList as $key => $singleFlim) {
                    $title = $singleFlim["title"];
                    $genres = $singleFlim["genre"];
                    $date = $singleFlim["date"];

                    $film[$key] = new Movie($title, $genres, $date);
            ?>
            
                    <li>
                        <div>
                            <?php
                                echo $title; 
                            ?>
                        </div>
                        <div>
                            <?php 
                                 echo $film[$key]->genres->getGenre(); 
                            ?>
                        </div>
                        <div>
                            <?php
                                echo $date;
                            ?>
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