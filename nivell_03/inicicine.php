<?php

include_once 'Cinema.php';
include_once 'Peli.php';


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


$entradadadescinema2 = new Cinema("El nom de la sala de cine 2", "La direccio de la sala 2");
$entradadadescinema2->afegir_pelis([
    new Peli("el titol de la peli 2", 95, "el nom del director2"),
]);

foreach ($entradadadescinema2->pelicules as $peli) {
    echo "<h4>{$entradadadescinema2->nomsala}</h4>";
    echo "<h4>{$peli->nompeli}</h4>";
    echo "<p>{$peli->duracio} minuts</p>";
    echo "<p>{$peli->director}</p>";
}

?>