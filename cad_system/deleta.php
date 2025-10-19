<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <?php 
    include_once('conecta.php');

    $id = $_GET['id'];

    $query = "DELETE FROM clientes where id=$id";

    $resultado = mysqli_query($conexao,$query);

    if($resultado){
        echo "<h2>Dados excluidos com Sucesso!</h2>";
        echo "<h3><a href='cad_cliente.php'</a>Voltar</h3>";
    } else{
        echo "<h2>Erro ao excluir!</h2>";
        echo "<h3><a href='cad_cliente.php'</a>Voltar</h3>";

    }   

    
    
    
    
    ?>
</body>
</html>