
<?php

class Employee
{

    // atributos
    public $nom; // pot ser public private o protected
    public $sou;


    public function initialize($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    // imprimir la info y mirar si paga o no impostos

    public function imprimirInfoyComprobarSiEspagenImpostos()
    {
        echo '<br/>Nom: ' . $this->nom . '<br/>';
        echo 'Sou: ' . $this->sou . '<br/>';
        if ($this->sou > 6000) {  // cambitat a mes gran de 6000
            echo 'Te que pagar Impostos' . '<br/>';
        } else {
            echo 'No te que pagar' . '<br/>';
        }
    }
}