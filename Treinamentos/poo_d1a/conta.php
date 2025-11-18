<?php 
class Conta {
//Atributos
    private $numConta;
private $tipo;
private $dono;
private $saldo;
private $status;

//Metodos Especiais
public function getNumConta(){
    return $this->numConta;
}
public function setNumConta($num){
    $this->numConta = $num;
}
public function getTipo(){
    return $this->tipo;
}
public function setTipo($t){
    $this->tipo = $t;
}
public function getDono(){
    return $this->dono;
}
public function setDono($d){
    $this->dono = $d;
}
public function getSaldo() {
    return $this-> saldo;
}
public function setSaldo($s){
    $this->saldo = $s;
}
public function getStatus(){
    return $this->status;
}
public function setStatus($st){
    $this->status = $st;
}

//Metodos
public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
}
public function abrirConta($t){
    $this->setStatus(true);
    if ($t=="CC"){
        $this->setTipo($t);
        $this->setSaldo(50);
    }elseif($t=="CP"){
        $this->setTipo($t);
        $this->setSaldo(150);
    }
    else{
        echo"Tipo de conta invalido";
    }

}
public function fecharConta() {
    if ($this->getStatus()){
        if ($this->getSaldo() > 0){
            echo "ERRO! Não foi possivel encerrar a conta, saldo disponivel";
        }elseif ($this->getSaldo() < 0){
            echo "ERRO! Não foi possivel encerrar a conta, existe pendencias";       
        }else{
            echo"Conta encerrada com sucesso!";
        }

    }

}
public function depositar($v){
    if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo() + $v);
    }else{
        echo"Conta encerrada, não é possível depositar";
    }

}
public function sacar($v){
    if ($this->getSaldo() > $v){
        $this->setSaldo($this->getSaldo() - $v);

    }else {
        echo "Saldo Insuficiente";
    }

}
public function pagarMensalidade($t){
    if ($this->getStatus()){
        if($t=="CC") {
           $this->setSaldo(s: $this->getSaldo() - 12); 
        }elseif($t=="CP"){
            $this->setSaldo($this->getSaldo() - 20);
        }
    }else{
        echo "Conta encerrada, não é possivel debitar!";
    }

}




}

?>