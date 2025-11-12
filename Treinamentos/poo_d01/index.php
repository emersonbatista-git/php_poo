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
            require_once 'contabanco.php';
                   
            $p1 = new ContaBanco();
            $p1->setNumConta(1);
            $p1->setDono("Creuza");
            $p1->abrirConta("CP");
            $p1->depositar(500);
            $p1->sacar(100);



            $p2 = new ContaBanco();
            $p2->setNumConta(2);
            $p2->setDono("Jubileu");
            $p2->abrirConta("CC");
            $p2->depositar(300);
            

            print_r($p1);
            print_r($p2);
        
        
        
        
        ?>
    </pre>
</body>
</html>