<?php 
$id = $_GET["ano"] ?? 2025;
//$atual = date('d/m/Y');

$idade = date('Y') - $id;

echo "Você tem " . $idade . " anos!";








?>