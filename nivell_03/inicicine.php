<?php

include_once 'Class/Cinema.php';
include_once 'Class/Peli.php';


$entradadadescinema1 = new Cinema("Cinema Imperial", "Av.Rambla , Sabadell #08222");
$entradadadescinema1->afegir_pelis([

new Peli("La ventana indiscreta", 90, "Alfred Hitchcock"),
new Peli("La noche del cazador", 90, "Charles Laughton"),
new Peli("La naranja mecánica", 90, "Stanley Kubrick"),
new Peli("El resplandor", 90, "Stanley Kubrick"),
new Peli("El club de la lucha", 90, "David Fincher"),
new Peli("Mulholland Drive", 90, "David Lynch"),
new Peli("Inception", 90, "Christopher Nolan"),
new Peli("El resplandor de la luna llena", 90, "Ryusuke Hamaguchi"),
new Peli("El triángulo de las Bermudas", 90, "Rodrigo Cortés"),
]);

?>
