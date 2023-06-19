<?php

class Data
{
    public $day;
    public $mouth;
    public $year;

    public function __construct($day, $mouth, $year)
    {
        $this->day = $day;
        $this->mouth = $mouth;
        $this->year = $year;

    }

    public function dataFilm()
    {
        return '<br>' . $this->day . ' ' . $this->mouth . ' ' . $this->year;
    }
}