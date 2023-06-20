<?php
include __DIR__ . '/db.php';
include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Genre.php';

$movie = new Movie('Film 1', 1990, 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg');

echo $movie->getLanguageCode();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($arrMovies as $index => $movie) {
            ?>
            <li>
                <?= $movie->title ?>
                <?= $movie->getLanguageCode() ?>
            </li>
            <?php
        } ?>
    </ul>
</body>

</html>