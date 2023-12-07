<?php

class Peli
{
    public $nompeli; // nom de la peli
    public $duracio; // duracio de la peli 
    public $director; // nom del director

    function __construct($nompeli, $duracio, $director)
    {
        $this->nompeli = $nompeli;
        $this->duracio = $duracio;
        $this->director = $director;
    }
}