<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
         <h1>Cadastro de Cliente</h1>
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="endereco">endereco:</label><br>
        <input type="text" id="endereco" name="endereco"><br><br>

        <label for="numero">Numero:</label><br>
        <input type="text" id="numero" name="numero"><br><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro"><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"><br><br>

        <label for="estado">Estado:</label><br>
        <input type="text" id="estado" name="estado"><br><br>

        <label for="pais">Pais:</label><br>
        <input type="text" id="pais" name="pais"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="cnpj">CNPJ:</label><br>
        <input type="text" id="cnpj" name="cnpj"><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br><br>

        <input type="submit" value="Cadastrar Cliente">
    </form>

    </main>
    
</body>
</html>