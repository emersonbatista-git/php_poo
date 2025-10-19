<?php
require_once __DIR__.'/../lib/storage.php'; require_once __DIR__.'/../lib/util.php'; require_once __DIR__.'/../vendor/autoload.php';
use Dompdf\Dompdf; use Dompdf\Options;
$db=new FileDB(__DIR__.'/../data/mic'); $id=$_GET['id']??''; $rec=$db->find($id); if(!$rec){http_response_code(404); echo 'Registro não encontrado.'; exit;} $f=$rec['form'];
ob_start(); ?>
<!doctype html><html lang='pt-br'><head><meta charset='utf-8'>
<style>
@page{ size:A4; margin:10mm }
*{ box-sizing:border-box; font-family:Arial, Helvetica, sans-serif; }
body{ margin:0; color:#000; }
.box{ border:0.25mm solid #000; padding:2.5mm; }
.title-bar{ text-align:center; font-weight:700; margin-bottom:2mm; font-size:11pt; }
.num{ font-size:7.5pt; font-weight:700; float:right; }
.label{ font-size:8.5pt; font-weight:700; letter-spacing:.2px; }
.val{ font-size:9.5pt; line-height:1.2; white-space:pre-wrap; }
.grid{ display:grid; gap:2.5mm; }
.g3{ grid-template-columns: 1fr 1fr 1fr; }
.g2{ grid-template-columns: 1fr 1fr; }
.g4{ grid-template-columns: repeat(4, 1fr); }
.footer{ margin-top:2mm; }
</style>
</head><body><?php include __DIR__.'/../pages/print_base.php'; ?></body></html>
<?php $html=ob_get_clean(); $opt=new Options(); $opt->set('isRemoteEnabled',true); $dompdf=new Dompdf($opt); $dompdf->loadHtml($html,'UTF-8'); $dompdf->setPaper('A4','portrait'); $dompdf->render(); $dompdf->stream('MIC-DTA-'.($f['numero_mic']??$id).'.pdf', ['Attachment'=>true]); ?>