<?php 
$resto = $_GET["sacar"];

if ($resto % 5 <> 0) {
    echo "Celulas disponiveis R$ 5, R$ 20, R$ 50, R$ 100";

}else {
$tot_cem = (int)($resto / 100);
$resto = $resto % 100;

$tot_cinq = (int)($resto/50);
$resto = $resto % 50;

$tot_vint = (int)($resto / 20);
$resto =  $resto % 20;

$tot_cinc = (int)($resto/5);
$resto =  $resto % 5;
  
echo "O valor será entregue da sequinte forma:";
echo "<br> $tot_cem X R$ 100,00";
echo "<br> $tot_cinq X R$ 50,00";
echo "<br> $tot_vint X R$ 20,00";
echo "<br> $tot_cinc X R$ 5,00";
}


?>