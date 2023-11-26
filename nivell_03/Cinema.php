<?php

class Cinema
{
    public $nomsala; // nom del cine
    public $poblacio; // la poblacio 
    public $pelicules = []; // llistat de pelis que tindra aquest cine


    function __construct($nomsala, $poblacio) // constructor nom y poblacio 
    {
        $this->nomsala = $nomsala;
        $this->poblacio = $poblacio;
    }
    public function afegir_pelis(array $pelicules)
    {
        $this->pelicules = array_merge($this->pelicules, $pelicules);
    }
}