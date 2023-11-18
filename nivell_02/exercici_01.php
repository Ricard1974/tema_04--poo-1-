Exercici 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures:
 As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.


<?php



class dado {
    private $puntos;
    private $figuras = ["As", "K", "Q", "J", "7", "8"];

    private function throw() {
        $this->puntos = mt_rand(0, 5); // Para acceder a los índices del array (0 al 5)
    }

    public function shapeName() {
        $this->throw();
        return $this->figuras[$this->puntos];
    }
}
$numeroTiradas= 5;
$mi_dado = new dado();

for ($i = 0; $i < $numeroTiradas; $i++) {
    echo "<br>Ha salido " . $mi_dado->shapeName();
}


?>