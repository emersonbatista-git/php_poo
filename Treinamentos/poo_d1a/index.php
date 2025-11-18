<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Santos</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'conta.php';
        
        $p1= new Conta();
        $p1->setNumConta(0001);
        $p1->setDono("Creuza");
        $p1->abrirConta("CC");
        $p1->getSaldo();
        $p1->getTipo();
        $p1->depositar(250);
        $p1->pagarMensalidade("CC");
        
       
        


        print_r($p1);

        $p2= new Conta();
        $p2->setNumConta(0002);
        $p2->setDono("João");
        $p2->abrirConta("CP");
        $p2->getSaldo();
        $p2->getTipo();
        $p2->sacar(50);
        $p2->pagarMensalidade("CP");
        
       
        


        print_r($p2);
        
        ?>
    </pre>
    
</body>
</html>
