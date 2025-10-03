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
        require_once 'caneta.php';
        $c1 = new Caneta("BIC","Azul", 0.5);
        $c2 = new Caneta("BIC", "Vermelha", 1.0);

        print_r($c1);
        print_r($c2);

   //     $c1->setModelo("BIC");
   //     $c1->setPonta(0.5);
   //   print "Eu tenho uma caneta {$c1->getModelo() } de ponta {$c1->getPonta()}";
        
        ?>
    </pre>
    
</body>
</html>