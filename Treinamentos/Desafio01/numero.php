<?php 
$num = $_GET["numero"] ?? 0;

echo "<h1>O antecessor e o sucessor do numero $num é:";

$ant = $num - 1;
$suc = $num + 1;

print "<br>Antecessor: $ant";
echo "<br>Sucessor: $suc";




?>