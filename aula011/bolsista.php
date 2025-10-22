<?php 

require_once 'aluno.php';
class Bolsista extends Aluno{

    private $bolsa;
    public function renovaBolsa(){
        echo "Bolsa renovada";

    }

     public function pagarMensalidade() {
        echo "$this->nome é bolsista!Então paga com desconto!";
    }

    function getBolsa(){
        return $this-> bolsa;
    }
    function setBolsa($bolsa) {
        $this->bolsa=$bolsa;

    }
}


?>