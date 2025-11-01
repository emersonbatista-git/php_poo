<?php 
$seg = $_GET["tempo"];
$sem = 604800;
$dia = 86400;
$hora = 3600;
$min = 60;

$tot_sem = intdiv($seg, $sem);
$r_sem = $seg % $sem;

$tot_dia = intdiv($r_sem, $dia, );
$r_dia = $r_sem % $dia;

$tot_hora = intdiv($r_dia, $hora);
$r_hora =  $r_dia % $hora;

$tot_min = intdiv($r_hora, $min);
$r_min =  $r_hora % $min;

echo "Os segundos informados representa:";
echo "<br> $tot_sem semanas";
echo "<br> $tot_dia dias";
echo "<br> $tot_hora horas";
echo "<br> $tot_min minutos";
echo "<br> $r_min segundos";


?>