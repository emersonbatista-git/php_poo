<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n = $_GET["real"] ?? 1;

   echo "A analise do numero $n é:";

   $r = (int)$n;

    $f = $n - $r;
    

    
    echo "</br>Parte inteira: " . number_format($r);
    echo "</br>Parte fracionada: " . number_format($f,3,",", ".");


    
    
    
    
    ?>
    
</body>
</html>