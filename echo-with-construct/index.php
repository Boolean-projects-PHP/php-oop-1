<?php
include __DIR__ . '/classes/Movie.php';

$titolo = 'Echo with construct';
echo $titolo;


$film = new Movie('Forrest Gump', 'commedia, drammatico, sentimentale', '15 febbraio 1976', 'Robert Zemeckis');

$film2 = new Movie("Top Gun", " avventura, azione, drammatico", "7 dicembre 1986", "Tony Scott");

$film3 = new Movie('Titanic', 'drammatico', '19 dicembre 1997', 'James Cameron');

echo '<hr>';
echo $film->infoFilm();
echo '<hr>';
echo $film2->infoFilm();
echo '<hr>';
echo $film3->infoFilm();
echo '<hr>';