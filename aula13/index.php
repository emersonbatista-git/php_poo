<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
require_once 'mami.php';
require_once 'lobo.php';
require_once 'cachorro.php';


$c = new cachorro();

$c->reagirfrase("Olá");              //Abanar e Latir
$c->reagirFrase("Vai apanhar");      //Rosnar
$c->reagirHora(11, 45);          //Abanar
$c->reagirHora(21, 00);          //Ignorar
$c->reagirDono(true) ;                //Abanar
$c->reagirDono(false);                //Rosnar e latir
$c->reagirIdadePeso(2, 12.5) ; //Latir
$c->reagirIdadePeso(17, 4.5);  //Rosnar




?>
    
</body>
</html>