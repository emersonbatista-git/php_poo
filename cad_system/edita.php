<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php 
    include_once('conexao.php');
    
    $id = $_GET['id'];
    $query = "SELECT *FROM clientes where id =$id";
    
    $resultado = mysqli_query($conexao,$query);

    $dados = mysqli_fetch_assoc($resaultado);

      ?>

    <form action="atualiza.php" method="POST" onsubmit="return confirm('Tem certeza que deseja atualizar os dados?')">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $dados['nome']; ?>"><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" value="<?php echo $dados['cidade']; ?>"><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" value="<?php echo $dados['estado']; ?>"><br>

        <input type="submit" value="Atualizar Dados">

    </form>

    <br>

    <h3><a href="cad_cliente.php">Voltar</a></h3>

    
    
    
    
  
    
</body>
</html>