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