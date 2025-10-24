<?php 
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;
    
    public function locomover(){
        echo "<p>Nadando</p>";
    }
   public function alimentar() {
        echo "<p>Comendo substancias</p>";
   }
   public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
   }
   function getCorEscama() {
   return $this->corEscama;
   }
   function setCorEscama($corescama){
    $this->corEscama=$corescama;
   }
   function SoltarBolha(){
    echo "<p>Soltar bolha</p>";
   }
   


}





?>