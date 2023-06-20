<?php
class Movie
{


    public function __construct(
        public string $title,
        public int $year,
        public string $country,
        public string $language,
        public array $genres,
        public string $img
    ) {

        if ($title === '') {
            die('il titolo non può essere una stringa vuota');
        }

        if ($year < 1920) {
            die('mettere un anno maggiore di 1920');
        }
        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                die('Tutti generi devono essere di tipo Genre');
            }
        }
    }

    public function getLanguageCode()
    {
        return substr(strtoupper($this->language), 0, 3);
    }
}