- Exercici 1
Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes.

Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica.

https://www.youtube.com/watch?v=Ben_VC2rm10


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

class Peli
{
    public $nompeli; // nom de la peli
    public $duracio; // duracio de la peli 
    public $director; // nom del dordirector

    function __construct($nompeli, $duracio, $director)
    {
        $this->nompeli = $nompeli;
        $this->duracio = $duracio;
        $this->director = $director;
    }
}


$entradadadescinema1 = new Cinema("El nom de la sala de cine", "La direccio de la sala");
$entradadadescinema1->afegir_pelis([
    new Peli("el titol de la peli", 90, "el nom del director"),
]);

foreach ($entradadadescinema1->pelicules as $peli) {
    echo "<h4>{$entradadadescinema1->nomsala}</h4>";
    echo "<h4>{$peli->nompeli}</h4>";
    echo "<p>{$peli->duracio} minuts</p>";
    echo "<p>{$peli->director}</p>";
}

?>