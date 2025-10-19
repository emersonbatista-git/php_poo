<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    include_once('conecta.php');
    $id=$_POST['id'];

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

    $query = "UPDATE clientes set nome='$nome, cidade='$cidade', estado='$estado' where id=['$id']"; 

    $resultado = mysqli_query($conexao, $query);

    
    if($resultado){
        echo "<h2>Dados Atualizados com Sucesso!</h2>";
        echo "<h3><a href='cad_cliente.php'</a>Voltar</h3>";
    } else{
        echo "<h2>Erro ao atualizar!</h2>";
        echo "<h3><a href='cad_cliente.php'</a>Voltar</h3>";

    }   
    
    
    
    ?>
    
</body>
</html>