Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures:
As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
<?php

class DadoPoker
{

    private $figuras = ['As', 'K', 'Q', 'J', '7', ' 8'];
    private $puntos;

    function lanzar()
    {

        $this->puntos = mt_rand(0, 5);
    }
    function nombredelacara(){
        return $this->figuras[$this->puntos];
    }

}

?>