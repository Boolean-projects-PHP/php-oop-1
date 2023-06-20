<?php

include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Genre.php';
include __DIR__ . '/db.php';

// $movie1 = new Movie('Film 1', 1990, 'Italy', 'italiano', [new Genre('Horror', 'lorem description')], 'ciao.jpg');
// $movie2 = new Movie('Film 2', 1980, 'Italy', 'inglese', [new Genre('Horror', 'lorem description')], 'ciao.jpg');

// echo $movie1->getLanguageCode();
// echo $movie2->getLanguageCode();

// var_dump($movie1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <ul>
        <?php

        foreach ($arrMovies as $index => $movie) { ?>
            <li>
                <ul>
                    <li><img src="images/<?= $movie->img ?>"></li>
                    <li>
                        <?= $index + 1 ?>
                    </li>
                    <li>
                        <?= $movie->title ?>
                    </li>
                    <li>
                        <?= $movie->getLanguageCode() ?>
                    </li>
                    <li>
                        <ul>
                            <?php
                            foreach ($movie->genres as $genre) { ?>
                                <li>
                                    <?= $genre->name ?>
                                </li>
                            <?
                            } ?>
                        </ul>
                    </li>
                </ul>
                <?php
        } ?>

    </ul>
</body>

</html>