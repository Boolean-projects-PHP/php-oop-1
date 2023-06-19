<?php
include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Data.php';

$titolo = 'Echo with construct';
echo $titolo;


$film = new Movie('Forrest Gump', 'commedia, drammatico, sentimentale', $filmData, 'Robert Zemeckis');
$filmData = new Data('15', 'febbraio', '1976');

$film2 = new Movie("Top Gun", " avventura, azione, drammatico", $film2Data, "Tony Scott");
$film2Data = new Data('15', 'dicembre', '1986');

$film3 = new Movie('Titanic', 'drammatico', $film3Data, 'James Cameron');
$film3Data = new Data('19', 'dicembre', '1997');


echo '<hr>';
echo $film->infoFilm();
echo '<hr>';
echo $film2->infoFilm();
echo '<hr>';
echo $film3->infoFilm();
echo '<hr>';