<?php


class Movie
{
    public $nome;
    public $genere;
    public $data;
    public $regista;

    public function infoFilm()
    {
        return $this->nome . '<br>' . $this->genere . '<br>' . $this->data . '<br>' . $this->regista;
    }
}