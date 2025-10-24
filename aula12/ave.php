<?php 
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    
    public function locomover(){
        echo "<p>Voando</p>";
    }
   public function alimentar() {
        echo "<p>Comendo Frutas</p>";
   }
   public function emitirSom() {
        echo "<p>Som de ave</p>";
   }
   public function fazerNinho(){
    echo "<p>Fazendo ninho</p>";
   }
   function getCorPena() {
   return $this->corPena;
   }
   function setCorPena($corpena){
    $this->corpena=$corpena;
   }
   

}





?>