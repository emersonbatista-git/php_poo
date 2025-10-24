<?php 
require_once 'pessoa.php';

class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    public function pagarMensalidade() {
        echo "Pagando mensalidade do aluno $this->nome";
    }

    function getMatricula() {
        return $this->matricula;
    }
    function getCurso() {
        return $this->curso;
    }
    function setMatricula($matricula) {
        $this->matricula=$matricula;
    }
    function setCurso($curso) {
        $this->curso=$curso;
    }





}



?>