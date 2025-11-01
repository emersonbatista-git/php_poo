<?php 
$pr = $_GET["preco"] ?? 0;
$rj = $_GET["reajuste"] ?? 0;

$np = (($pr * $rj) / 100) + $pr;


echo "O produto com o valor de " . number_format($pr,2,",",".") . " reajustado em $rj %, tem seu novo valor de R$ ". number_format($np,2,",",".");



?>