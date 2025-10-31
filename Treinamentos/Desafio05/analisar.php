<?php 

$num = $_GET["numero"] ?? 1;
$r = intval($num);
$d = $num - $r;

echo "O numero informado foi $num";
echo "<br>O numero inteiro é $r";
echo "<br>O numero decimal é " . number_format($d,5, ",",".");



?>