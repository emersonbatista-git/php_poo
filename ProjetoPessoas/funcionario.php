<?php
require_once 'pessoa.php';
class Funcionario extends Pessoa {
private $setor;
private $trabalhando;

public function mudarTrbalho() {
    $this->trabalhando = ! $this->trabalhando;
    
}
public function getSetor() {
    return $this->setor;
}
public function getTrabalhando() {
    return $this->trabalhando;
    
}

public function setSetor($Setor) {
    $this->setor = $Setor;
}
public function setTrabalhando($trabalhando) {
    $this->trabalhando= $trabalhando;
    
}


}
?>