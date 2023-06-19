<?php
include __DIR__ . '/classes/Movie.php';

$titolo = 'Var dump';
echo $titolo;


$film = new Movie();
$film->nome = "Forrest Gump";
$film->genere = "commedia, drammatico, sentimentale";
$film->data = "15 febbraio 1976";
$film->regista = "Robert Zemeckis";

var_dump($film);

$film2 = new Movie();
$film2->nome = "Top Gun";
$film2->genere = " avventura, azione, drammatico";
$film2->data = "7 dicembre 1986";
$film2->regista = "Tony Scott";

var_dump($film2);


echo '<hr>';
echo $film->nome . '<br>' . $film->genere . '<br>' . $film->data . '<br>' . $film->regista;
echo '<hr>';
echo $film2->nome . '<br>' . $film2->genere . '<br>' . $film2->data . '<br>' . $film2->regista;
echo '<hr>';