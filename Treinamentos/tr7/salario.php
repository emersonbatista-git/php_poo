<?php 

$salario = $_GET["salario"] ?? 0;
$minimo = 1518;

$tot_minimo = $salario / $minimo;
$i = floor($tot_minimo);
$d = $tot_minimo - $i;
$r = $minimo * $d; 



print "Voce ganha $i salarios minimos e $r reais."



?>