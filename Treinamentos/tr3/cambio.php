<html>

    <h1>Resultado</h1>
    <?php
    
    
    $v = $_GET["valor"] ?? 1;
    $c = 5.44;
    
    $r = $v / $c;

    echo "A quantia de R$ $v equivale a US$ " . number_format($v,2, ",", ".");
    
    
    ?>
</html>