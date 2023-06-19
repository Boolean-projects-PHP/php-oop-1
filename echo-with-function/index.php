<?php
include __DIR__ . '/classes/Movie.php';

$titolo = 'Echo with functions';
echo $titolo;


$film = new Movie();
$film->nome = "Forrest Gump";
$film->genere = "commedia, drammatico, sentimentale";
$film->data = "15 febbraio 1976";
$film->regista = "Robert Zemeckis";


$film2 = new Movie();
$film2->nome = "Top Gun";
$film2->genere = " avventura, azione, drammatico";
$film2->data = "7 dicembre 1986";
$film2->regista = "Tony Scott";


echo '<hr>';
echo $film->infoFilm();
echo '<hr>';
echo $film2->infoFilm();
echo '<hr>';