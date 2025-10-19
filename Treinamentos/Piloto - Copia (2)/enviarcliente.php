<?php 
$conexao = mysqli_connect("localhost", "root","","db_fortuna_sys");
//checar conexao
if(!$conexao) {
    echo "Nao Conectado";
}
echo "CONECTADO COM SUCESSO>>>>>>>>>";

//recuperar e verificar cpf
$cnpj = $_POST['cnpj'];
$cnpj = mysqli_real_escape_string($conexao, $cnpj);

$sql = "SELECT cpf FROM db_fortuna_sys.clientes WHERE cnpj='$cnpj'";
$retorno = mysqli_query($conexao, $sql);

if (mysqli_num_rows($retorno)>0) {
    echo "CNPJ já cadastrado!<br>";
    echo"<a href='cliente.html'>VOLTAR</a>";
}else {
    $nome= $_POST['nome'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];

    $sql = "INSERT INTO db_fortuna_sys.clientes(nome,endereco,numero,bairro,cidade,estado,pais,email,telefone,cnpj) values('$nome','$endereco','$numero','$bairro','$cidade','$estado','$pais','$email','$telefone','$cnpj')";

    $resultado = mysqli_query($conexao, $sql);
     echo">>USUARIO CADASTRADO COM SUCESSO!<BR>";
     echo"<a href='cliente.html'>VOLTAR</a>";



}

?>