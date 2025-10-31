<?php 

$dv = $_GET["dividendo"];
$ds = $_GET["divisor"];

$q = intdiv($dv , $ds);
$r = $dv % $ds;


echo "<br>Dividendo: ". $dv;
echo "<br>Divisor: " . $ds;
echo "<br>Quociente: " . $q;
echo "<br>Resto: " . $r;






?>