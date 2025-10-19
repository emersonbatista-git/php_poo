<?php 
$conexao = mysqli_connect("localhost", "root","","db_fortuna_sys");
//checar conexao
if(!$conexao) {
    echo "Nao Conectado";
}
echo "CONECTADO COM SUCESSO>>>>>>>>>";


?>