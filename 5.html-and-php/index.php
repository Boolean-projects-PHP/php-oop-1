<?php
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Data.php';
include __DIR__ . '/Models/Array.php';


// $filmData = new Data('15', 'febbraio', '1976');
// $film = new Movie('Forrest Gump', 'commedia, drammatico, sentimentale', 'Robert Zemeckis', $filmData, );

// var_dump($film);

// $film2Data = new Data('15', 'dicembre', '1986');
// $film2 = new Movie("Top Gun", "avventura, azione, drammatico", "Tony Scott", $film2Data);

// var_dump($film2);

// $film3Data = new Data('19', 'dicembre', '1997');
// $film3 = new Movie('Titanic', 'drammatico', 'James Cameron', $film3Data);

// var_dump($film3);

// $film->infoFilm()

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1>Film</h1>
    <hr>
    <div class="">
        <span class="px-2" style="font-weight:bolder">Info Film:</span>
        <hr class="p-0">
        <?php
        foreach ($movies as $movie) { ?>
            <div class="px-3">
                <span style="font-weight:bolder">Nome:</span>
                <?= $movie->nome ?>
                <br>
                <span style="font-weight:bolder">Genere:</span>
                <?= $movie->genere ?>
                <br>
                <span style="font-weight:bolder">Regista:</span>
                <?= $movie->regista ?>
                <br>
                <span style="font-weight:bolder">Data:</span>
                <?= $movie->data ?>
            </div>
            <hr>
        <?php } ?>
    </div>

</body>

</html>