<?php

$arrGenres = [
    new genre('Horror', 'descizione'),
    new genre('Romantico', 'descrizione'),
    new genre('Commedia', 'descrizione'),
];

// $arrMovies = [
//     new Movie('Film 1', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
//     new Movie('Film 2', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
//     new Movie('Film 3', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
//     new Movie('Film 4', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
//     new Movie('Film 5', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
//     new Movie('Film 6', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
//     new Movie('Film 7', rand(1920, 2023), 'Italy', 'Italiano', [new Genre('Horror', 'commedia')], 'ciao.jpg'),
// ];


$dataMovie = [
    [
        'title' => 'Film 1',
        'year' => 1990,
        'country' => 'Italy',
        'language' => 'Italiano',
        'genre' => [0, 2],
        'img' => 'ciao.jpg'
    ],
    [
        'title' => 'Film 1',
        'year' => 1990,
        'country' => 'Italy',
        'language' => 'Italiano',
        'genre' => [1],
        'img' => 'ciao.jpg'
    ],
    [
        'title' => 'Film 1',
        'year' => 1990,
        'country' => 'Italy',
        'language' => 'Italiano',
        'genre' => [3, 4],
        'img' => 'ciao.jpg'
    ],
];

foreach ($dataMovie as $movie) {
    $movieGenres = [];
    foreach ($movie['genres'] as $index) {
        $movieGenres[] = $arrGenres[$index];
    }

    $arrMovies[] = new Movie(
        $movie['title'],
        $movie['year'],
        $movie['country'],
        $movie['language'],
        $movieGenres,
        $movie['img'],

    );
}