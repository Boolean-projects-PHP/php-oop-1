<?php



class Movie
{
    public $nome;
    public $genere;
    public $regista;
    public $data;


    public function __construct(string $nome, string $genere, string $regista, Data $data)
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->regista = $regista;
        $this->data = $data;

    }

    public function infoFilm()
    {
        return $this->nome . '<br>' . $this->genere . '<br>' . $this->regista;
    }
}