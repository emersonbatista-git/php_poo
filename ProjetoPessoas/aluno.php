<?php
require_once 'pessoa.php';
class Aluno extends Pessoa {
private $matr;
private $curso;

public function cancelçarMatr() {
    echo "<p>Matricula será cancelada</p>";
}
public function getMatr() {
    return $this->matr;
}
public function getcurso() {
    return $this->curso;
    
}

public function setMatr($matr) {
    $this->matr = $matr;
}
public function setCurso($curso) {
    $this->curso= $curso;
    
}


}
?>