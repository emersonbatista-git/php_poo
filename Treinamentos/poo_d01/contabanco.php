<?php 

class ContaBanco {
    //Atributos
    public $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Metodo Construtor
    public function __construct(){
        $this -> setStatus(false);
        $this -> setSaldo(0);
        echo "<p>Conta criada com sucesso!</p>";
       
    }

    //Metodos Especiais
    public function setNumConta($c) {
        $this -> numConta = $c;
    }
    public function getNumConta(){
        return $this-> numConta;
    }
    
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getTipo() {
        return $this-> tipo;
    }

    public function setDono($d) {
        $this->dono = $d;
    }
    public function getDono() {
        return $this-> dono;
    }

    public function setSaldo($s) {
        $this-> saldo = $s;
    }
    public function getSaldo() {
        return $this-> saldo;
    }

    public function setStatus($st) {
        $this->status = $st;
    }
    public function getStatus(){
        return $this-> status;

    }

    //Metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CP") {
            $this->setSaldo(150);
            
        }elseif ($t == "CC") {
            $this->setSaldo(50);
            

        }else{
            print "ERRO! Tipo invalido";
        } 

    }

    public function fecharConta() {
        if($this->getsaldo() > 0) {
             print "ERRO! Conta possui saldo!";
            
            
        }
        elseif ($this->getsaldo() < 0) {
            print "ERRO! Conta possui debito!";

        }
        else {
            $this->setStatus(false);
            print "Conta encerrada com sucesso!";
           
        }

    }

    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        }
        else {
            print "ERRO! Conta fechada, nao é possivel fazer deposito!";
        }

    }

    public function sacar($v) {
        
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v autorizado na conta de " . $this->getDono() . "</p>";
           
            } else {
            print "ERRO!Saldo insuficiente!";
        }
    }else {
        echo "Não posso sacar de uma conta fechada!";
    }

    }

    public function pagarMensalidade() {
        if ($this->getTipo() == "CC") {
            $v = 12;
            
        }elseif($this->getTipo() == "CP") {
           $v = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            print "Problemas com a conta. Não posso cobrar.";
        }

    }











}





?>