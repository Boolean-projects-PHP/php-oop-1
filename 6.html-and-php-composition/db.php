<?php

$arrGenres = [
    new Genre('Horror', 'lorem description Horror'),
    new Genre('Romantic', 'lorem romantic'),
    new Genre('Adventure', 'lorem description Adventure'),
    new Genre('Comic', 'lorem description Horror'),
    new Genre('Historic', 'lorem description historic'),
];

// $arrMovies = [
// 	new Movie('Film 1', rand(1920, 2023), 'Italy', 'italiano', [new Genre('Horror', 'lorem description')], 'ciao.jpg'),
// 	new Movie('Film 2', rand(1920, 2023), 'Italy', 'englis', [new Genre('Horror', 'lorem description')], 'ciao.jpg'),
// 	new Movie('Film 3', rand(1920, 2023), 'Italy', 'spagnolo', [new Genre('Horror', 'lorem description')], 'ciao.jpg'),
// 	new Movie('Film 4', rand(1920, 2023), 'Italy', 'coreano', [new Genre('ciao', 'lorem description')], 'ciao.jpg'),
// 	new Movie('Film 5', rand(1920, 2023), 'Italy', 'italiano', [new Genre('romanti', 'lorem description')], 'ciao.jpg'),
// 	new Movie('Film 6', rand(1920, 2023), 'Italy', 'italiano', [new Genre('Horror', 'lorem description')], 'ciao.jpg'),
// 	new Movie('Film 7', rand(1920, 2023), 'Italy', 'inglese', [new Genre('Horror', 'lorem description')], 'ciao.jpg'),
// ];

$dataMovie = [
    [
        'title' => 'Film 1',
        'year' => 1990,
        'country' => 'Italy',
        'language' => 'italiano',
        'genres' => [0, 2],
        'img' => 'picsum0.jpg'
    ],
    [
        'title' => 'Film 2',
        'year' => 1990,
        'country' => 'Italy',
        'language' => 'english',
        'genres' => [1],
        'img' => 'picsum14.jpg'
    ],
    [
        'title' => 'Film 3',
        'year' => 1990,
        'country' => 'Italy',
        'language' => 'spagnolo',
        'genres' => [3, 4],
        'img' => 'picsum16.jpg'
    ],
];

$arrMovies = [];
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

// var_dump($arrMovies);