<?php


class Movie
{
    public $nome;
    public $genere;
    public $data;
    public $regista;

    public function __construct($nome, $genere, $data, $regista)
    {
        $this->nome = $nome;
        $this->data = $data;
        $this->genere = $genere;
        $this->regista = $regista;

    }

    public function infoFilm()
    {
        return $this->nome . '<br>' . $this->genere . '<br>' . $this->data . '<br>' . $this->regista;
    }
}