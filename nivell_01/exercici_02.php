- Exercici 2
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().



<?php

class Forma  // seria  la clase pare
{

    public $amplada; // tambe es poden posar en protected, private
    public $alcada;
 


    public function __construct($amplada, $alcada)
    {
        $this->amplada = $amplada;
        $this->alcada = $alcada;

    }

    public function area()
    {
        return  0; // retorna res ja que calcularem el area de cada forma en la extensio de clase

    }
}

class Rectangle extends Forma  // la clase fill hereda (area)
{
    public function area(){
        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alcada;
        echo '<br/>';

        return $this->amplada * $this-> alcada;
    }
}
class Triangle extends Forma // clase fill que hereda area()
{
    public function area(){

        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alcada;
        echo '<br/>';
        return ($this->amplada * $this-> alcada)/2;
    }
}

$rectangle= new Rectangle(2,2);
echo '<br/>';
echo 'El area del rectangle es de '.$rectangle->area();


$triangle= new Triangle(5,4); // amplada , alcada i missatge
echo '<br/>';
echo 'El area del triangle es de '.$triangle->area();

?>