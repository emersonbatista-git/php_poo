<?php
require_once __DIR__.'/../lib/storage.php'; require_once __DIR__.'/../lib/util.php';
$db=new FileDB(__DIR__.'/../data/mic'); $id=$_GET['id']??''; $rec=$db->find($id);
include __DIR__.'/../partials/header.php'; if(!$rec){echo "<div class='card'>Registro não encontrado.</div>"; include __DIR__.'/../partials/footer.php'; exit;}
$f=$rec['form']; ?>
<div class='card'><h2>MIC/DTA nº <?=h($f['numero_mic']??'')?></h2>
<p><b>Emissão:</b> <?=h($f['emissao']??'')?> • <b>Origem:</b> <?=h($f['origem_mercadoria']??'')?></p>
<div class='actions'><a class='btn' href='pages/print.php?id=<?=h($rec['id'])?>'>Imprimir (A4)</a> <a class='btn' href='actions/pdf.php?id=<?=h($rec['id'])?>'>PDF</a></div>
</div>
<?php include __DIR__.'/../partials/footer.php'; ?>