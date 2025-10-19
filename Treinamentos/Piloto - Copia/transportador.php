<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <h2>Cadastro de Transportador</h2>
    <main>
        <form action="processa_cadastro.php" method="post">
            <label for="nome_transp">Nome:</label><br>
            <input type="text" id="nome_transp" name="nome_transp"><br><br>
            <label for="email_transp">Email:</label><br>
            <input type="email" id="email_transp" name="email_transp"><br><br>
            <label for="telefone_transp">Telefone:</label><br>
            <input type="text" id="telefone_transp" name="telefone_transp"><br><br>
            <label for="cnpj">CNPJ:</label><br>
            <input type="text" id="cnpj" name="cnpj"><br><br>
            <label for="placa_veiculo">Placa do Veículo:</label><br>
            <input type="text" id="placa_veiculo" name="placa_veiculo"><br><br>
            <input type="submit" value="Cadastrar Transportador">
        </form>
    </main>

</body>
</html>