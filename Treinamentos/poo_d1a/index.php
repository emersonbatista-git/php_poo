<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'conta.php';
        $p1 = new Conta;
        $p1-> setDono("Creuza");
        $p1-> abrirConta("XP");


        print_r($p1);
        
        
        
        ?>
    </pre>
    
</body>
</html>