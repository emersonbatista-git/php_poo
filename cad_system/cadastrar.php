<?php 
include_once('conexao.php');
//Funcao para proteget injeção de sql(invasao) htmlspecialchars\\
    $nome= htmlspecialchars ($_POST['nome']);
    $endereco = htmlspecialchars ($_POST['endereco']);
    $numero = htmlspecialchars ($_POST['numero']);
    $bairro = htmlspecialchars ($_POST['bairro']);
    $cidade = htmlspecialchars ($_POST['cidade']);
    $estado = htmlspecialchars ($_POST['estado']);
    $pais = htmlspecialchars ($_POST['pais']);
    $email = htmlspecialchars ($_POST['email']);
    $telefone = htmlspecialchars ($_POST['telefone']);
    $cnpj = htmlspecialchars ($_POST['cnpj']);
    $cep = htmlspecialchars ($_POST['cep']);
    $ativo = htmlspecialchars ($_POST['ativo']);
  
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
    $cep = $_POST['cep'];
    $ativo = $_POST['ativo'];

    $sql = "INSERT INTO db_fortuna_sys.clientes(nome,endereco,numero,bairro,cidade,estado,pais,email,telefone,cnpj,cep, ativo) values('$nome','$endereco','$numero','$bairro','$cidade','$estado','$pais','$email','$telefone','$cnpj', '$cep', '$ativo')";

    //Funçao para levar a informação para o BD
    $resultado = mysqli_query($conexao, $sql);
     echo">>USUARIO CADASTRADO COM SUCESSO!<BR>";
     echo"<a href='cad_cliente.php'>VOLTAR</a>";
     
     mysqli_close($conexao);
}  







?>