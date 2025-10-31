<?php 
$n1 = $_GET['nota1'];
$n2 = $_GET['nota2'];
$p1 = $_GET['peso1'];
$p2 = $_GET['peso2'];

$m = ($n1 + $n2) / 2;
$mp = (($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2);

echo "A media das notas $n1 e $n2 é $m";
echo "<br>A media ponderada entre nota (nota $n1 com peso $p1) e (nota $n2 com peso $p2) é $mp";

?>