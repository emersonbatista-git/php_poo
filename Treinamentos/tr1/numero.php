<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n = $_GET["numero"] ?? 1;
    
    $a = $n - 1;
    $s = $n + 1;

    Echo "O antecessor do $n é $a";
    Echo "</br>O sucessor de $n é $s";
    
    
    ?>
   
</body>
</html>