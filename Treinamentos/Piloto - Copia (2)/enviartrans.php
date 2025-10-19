<?php 
$conexao = mysqli_connect("localhost", "root","","db_fortuna_sys");
//checar conexao
if(!$conexao) {
    echo "Nao Conectado";
}
echo "CONECTADO COM SUCESSO>>>>>>>>>";

//recuperar e verificar cnpj
$cnpj = $_POST['cnpj'];
$cnpj = mysqli_real_escape_string($conexao, $cnpj);

$sql = "SELECT cnpj FROM db_fortuna_sys.transportadores WHERE cnpj='$cnpj'";
$retorno = mysqli_query($conexao, $sql);

if (mysqli_num_rows($retorno)>0) {
    echo "CNPJ já cadastrado!<br>";
    echo"<a href='cliente.html'>VOLTAR</a>";
}else {
    $nome= $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];
    $placa_veiculo = $_POST['placa_veiculo'];

    $sql = "INSERT INTO db_fortuna_sys.clientes(nome,email,telefone,cnpj,placa_veiculo) values('$nome','$email','$telefone','$cnpj', $placa_veiculo')";

    $resultado = mysqli_query($conexao, $sql);
     echo">>USUARIO CADASTRADO COM SUCESSO!<BR>";
     echo"<a href='cliente.html'>VOLTAR</a>";



}

?>