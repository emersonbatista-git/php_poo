<?php
require_once __DIR__.'/../lib/storage.php'; require_once __DIR__.'/../lib/util.php';
$db=new FileDB(__DIR__.'/../data/mic'); $id=$_GET['id']??''; $rec=$db->find($id); if(!$rec){http_response_code(404); echo 'Registro não encontrado.'; exit;} $f=$rec['form']; ?>
<!doctype html><html lang='pt-br'><head><meta charset='utf-8'><title>Impressão MIC/DTA</title>
<style>
@page{ size:A4; margin:10mm }
*{ box-sizing:border-box; font-family:Arial, Helvetica, sans-serif; }
body{ margin:0; color:#000; }
.sheet{ width:100%; }
.box{ border:0.25mm solid #000; padding:2.5mm; min-height:10mm; }
.title-bar{ text-align:center; font-weight:700; margin-bottom:2mm; font-size:11pt; }
.num{ font-size:7.5pt; font-weight:700; float:right; }
.label{ font-size:8.5pt; font-weight:700; letter-spacing:.2px; text-transform:none; }
.val{ font-size:9.5pt; line-height:1.2; white-space:pre-wrap; }
.grid{ display:grid; gap:2.5mm; }
.g3{ grid-template-columns: 1fr 1fr 1fr; }
.g2{ grid-template-columns: 1fr 1fr; }
.g4{ grid-template-columns: repeat(4, 1fr); }
.footer{ margin-top:2mm; }
@media print { .toolbar{ display:none; } }
.toolbar{ position:fixed; top:8mm; right:10mm; }
.toolbar a{ border:.3mm solid #333; padding:2mm 3mm; text-decoration:none; color:#000; margin-left:2mm; }
</style>
</head><body><div class='toolbar'><a href='../actions/pdf.php?id=<?=h($rec['id'])?>'>PDF</a></div>
<?php include __DIR__.'/print_base.php'; ?></body></html>