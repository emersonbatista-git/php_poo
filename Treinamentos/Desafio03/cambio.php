<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <?php 
    $valor = $_GET['valor'] ?? 1;
    $cot = 5.38;

    $dolar = $valor / $cot;

    echo "Cotação do dia 31/10/2025: " . $cot;
    echo "<br>A quantia de R$ " . number_format($valor,2, ",",".") . " equivale a US$ " . number_format($dolar,2,",","." );
    
    
    ?>
    
</body>
</html>