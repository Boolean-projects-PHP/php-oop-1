<?php
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Data.php';

$titolo = 'Echo with composition';
echo $titolo;

$filmData = new Data('15', 'febbraio', '1976');
$film = new Movie('Forrest Gump', 'commedia, drammatico, sentimentale', 'Robert Zemeckis', $filmData, );

var_dump($film);

$film2Data = new Data('15', 'dicembre', '1986');
$film2 = new Movie("Top Gun", " avventura, azione, drammatico", "Tony Scott", $film2Data);

var_dump($film2);

$film3Data = new Data('19', 'dicembre', '1997');
$film3 = new Movie('Titanic', 'drammatico', 'James Cameron', $film3Data);

var_dump($film3);



echo '<hr>';

echo $film->infoFilm();
echo $filmData->dataFilm();

echo '<hr>';

echo $film2->infoFilm();
echo $film2Data->dataFilm();

echo '<hr>';

echo $film3->infoFilm();
echo $film3Data->dataFilm();

echo '<hr>';