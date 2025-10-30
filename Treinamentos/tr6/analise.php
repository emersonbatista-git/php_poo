<?php 
$dividendo = $_GET["dividendo"];
$divisor = $_GET["divisor"];

$i = intdiv($divisor, $dividendo);
$r = $divisor % $dividendo; 

echo "A parte inteiro da divisão é $i";
echo "<br>O resto da divisao é $r"





?>