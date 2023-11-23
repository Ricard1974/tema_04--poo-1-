- Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha 
de pagar o no impostos (si el sou supera 6000, paga impostos).


<?php

class Employee{

    // atributos
    public $nom; // pot ser public private o protected
    public $sou;

    // iniciar o construir

    // public function __construct($nom,$sou)
    // {
    //     $this->nom = $nom;
    //     $this->sou = $sou;
    // }
    public function initialize($nom,$sou){
        $this->nom = $nom;
        $this->sou = $sou;
    }

    // imprimir la info

    public function imprimirInfo(){
        echo '<br/>Nom: '. $this->nom.'<br/>';
        echo 'Sou: '. $this->sou.'<br/>';
        if($this->sou >= 6000){
            echo 'Te que pagar Impostos'.'<br/>';
        }else{
            echo 'No te que pagar'.'<br/>';
        }
    }
    
}

// $empleat= new Employee('Manu',5000); // es crea un nou empleat, dos dades com es demanen en el constructor
// $empleat->imprimirInfo();

// $empleat= new Employee('Pepe',7000);

// $empleat->imprimirInfo();
$empleat3= new Employee();
$empleat3->initialize('Dani',3000);

$empleat3->imprimirInfo();

// $empleat= new Employee('Marta',6000);

// $empleat->imprimirInfo();
?>