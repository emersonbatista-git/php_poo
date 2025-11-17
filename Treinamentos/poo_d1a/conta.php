<?php 
//Classe
class Conta {
public $numConta;
public $tipo;
public $dono;
public $saldo;
public $status;

//Metodos Especiais

public function __construct(){
    $this-> setStatus(false) ;
    $this-> setSaldo(0);
}
public function setNumConta($n){
    $this->numConta=$n;
}
public function getNumConta() {
    return $this->numConta;
}

public function setTipo($t) {
    $this-> tipo = $t;
}
public function getTipo() {
    return $this-> tipo;
}

public function setDono($d) {
    $this-> dono = $d;

}
public function getDono() {
    return $this->dono;

}
public function setSaldo($s) {
    $this-> saldo = $s;
}
public function getSaldo() {
    $this-> saldo;
}
public function setStatus($st) {
    $this-> status = $st;
}
public function getStatus() {
    return $this-> status;
}

//Metodos ou Funções
public function abrirConta($t){
    $this-> setTipo($t);
    $this-> setStatus(true);
    if ($t == "CP") {
        $this-> setSaldo (150);
        echo "Sua Conta Poupança foi aberta com sucesso, bonus de R$ 150,00";
    }elseif ($t == "CC") {
        $this-> setSaldo(50);
        echo "Sua Conta Corrente foi aberta com sucesso, bonus de R$ 50,00";
    }else{
        echo "Tipo de conta inválida!";
    }
}





}

?>