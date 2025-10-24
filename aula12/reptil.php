<?php 
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
   public function alimentar() {
        echo "<p>Comendo Vewgetais</p>";
   }
   public function emitirSom() {
        echo "<p>Som de reptil</p>";
   }
   function getCorEscama() {
   return $this->corEscama;
   }
   function setCorEscama($corescama){
    $this->corEscama=$corescama;
   }



}





?>