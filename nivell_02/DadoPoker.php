Exercici 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures:
 As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.

<?php
class DadoPoker
{

  private $carasDado = ['As', 'K', 'Q', 'J', '7', '8'];// array con las caras de poker
  private $puntos;//variable del valor del dado
  private $numeroDados = 0;// numero de dados que se van a lanzar
  private $numTiradas = 20-1;// numero de tiradas
  private $dados = [];// array que va a almavecenar los dados tirados

  public function __construct($numeroDados = 9) {
    $this->puntos = 0;
    $this->numeroDados = $numeroDados;
  }

  public function lanzar() {
    $this->puntos = mt_rand(0, count($this->carasDado) - 1);
    return $this->puntos;
  }

  public function getPuntos() {
    return $this->puntos;
  }

  public function getFigura() {
    return $this->carasDado[$this->puntos];
  }

  public function tirarDaus() {
    $this->dados = [];// els daus a un array
    for ($i = 0; $i < $this->numeroDados; $i++) { // un loop de si i es 0 , $i es menor al numero de daus , es suma ++
      $dado = new DadoPoker();// inicies un dau
      $dado->lanzar();// fas un randi dekl dau
      $this->dados[] = $dado;// es posa en el array
    }
    $this->numTiradas++;// es sumen el numero de tirades
    return $this->dados; // torna el rssultat
  }

  public function mostrarDaus() {
    for ($i = 0; $i < count($this->dados); $i++) {
      echo "</br> - ".$this->dados[$i]->getFigura() . " ";
    }
    echo "</br>Número total de tiradas: " . $this->numTiradas;
  }
}

$dadoPoker = new DadoPoker();
$dados = $dadoPoker->tirarDaus();
$dadoPoker->mostrarDaus();