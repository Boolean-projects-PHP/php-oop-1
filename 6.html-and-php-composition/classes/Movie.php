<?php

class Movie
{
    public function __construct(
        public string $title,
        public int $year,
        // 123
        public string $country,
        public string $language,
        public array $genres,
        public string $img
    ) {
        if ($title === '') {
            die('Il titolo non può essere vuoto');
        }

        if ($year < 1920) {
            die('Mettere un anno >= 1920');
        }

        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                die('Tutti i generi devono essere di tipo Genre');
            }
        }
    }

    public function getLanguageCode()
    {
        return strtoupper(substr($this->language, 0, 3));
    }
}