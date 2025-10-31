<?php 

$r = $_GET["raiz"];

$r_q = sqrt($r);
$r_c = pow($r, 1/3);

echo "A raiz quadrada de " . $r . " é $r_q";
echo "<br>A raiz cubica de " . $r . " é $r_c";



?>