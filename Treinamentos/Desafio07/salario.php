<?php 
$sal = $_GET["salario"];
$sal_min = 1518;

$qtd = intdiv($sal, $sal_min);
$res = $sal % $sal_min;

echo "O salario minimo é R$ " . number_format($sal_min, 2,",",".");
echo "<br>Com o salario de " . number_format($sal,2,",",".") ." corresponde a ";
echo "$qtd salarios minimos e R$ ". number_format($res, 2,",",".");




?>