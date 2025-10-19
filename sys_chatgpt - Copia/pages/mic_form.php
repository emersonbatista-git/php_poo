<?php
require_once __DIR__.'/../lib/storage.php'; require_once __DIR__.'/../lib/util.php';
$look=['transporters'=>json_decode(file_get_contents(__DIR__.'/../data/lookups/transporters.json'),true),
       'remitters'=>json_decode(file_get_contents(__DIR__.'/../data/lookups/remitters.json'),true),
       'vehicles'=>json_decode(file_get_contents(__DIR__.'/../data/lookups/vehicles.json'),true)];
$db=new FileDB(__DIR__.'/../data/mic'); $id=get('id'); $rec=$id? $db->find($id):['form'=>[]];
include __DIR__.'/../partials/header.php'; ?>
<form class='card' method='post' action='actions/save.php'>
<input type='hidden' name='id' value='<?=h($id)?>'><h2>Formulário</h2>
<div class='tabs'><a class='tab active' data-tab='tab1'>Formulário</a><a class='tab' data-tab='tab2'>Formulário 1</a><a class='tab' data-tab='tab3'>Marcas/Nº/Volumes</a><a class='tab' data-tab='tab4'>Caminhão Substituto</a></div>
<section id='tab1' class='tab-pane'>
  <div class='grid'>
    <div><label>Número MIC</label><input name='form[numero_mic]' value='<?=h($rec['form']['numero_mic']??'')?>'></div>
    <div><label>Emissão</label><input type='date' name='form[emissao]' value='<?=h($rec['form']['emissao']??'')?>'></div>
    <div><label>Transportadora (nome)</label><input name='form[transportadora][nome]' value='<?=h($rec['form']['transportadora']['nome']??'')?>'></div>
    <div><label>Tração (placa)</label><input name='form[tracao]' value='<?=h($rec['form']['tracao']??'')?>'></div>
    <div><label>Semi-reboque (placa)</label><input name='form[semi_reboque]' value='<?=h($rec['form']['semi_reboque']??'')?>'></div>
    <div><label>Tipo Veículo</label><select name='form[tipo_veiculo]'><?=options(['Semi-reboque'=>'Semi-reboque','Reboque'=>'Reboque','Truck'=>'Truck'],$rec['form']['tipo_veiculo']??'Semi-reboque')?></select></div>
    <div><label>Remetente</label><input name='form[remetente][nome]' value='<?=h($rec['form']['remetente']['nome']??'')?>'></div>
    <div><label>Destinatário</label><input name='form[destinatario][nome]' value='<?=h($rec['form']['destinatario']['nome']??'')?>'></div>
    <div><label>Consignatário</label><input name='form[consignatario][nome]' value='<?=h($rec['form']['consignatario']['nome']??'')?>'></div>
    <div><label>Valor FOT</label><input name='form[valor_fot]' value='<?=h($rec['form']['valor_fot']??'')?>'></div>
    <div><label>Frete</label><input name='form[frete]' value='<?=h($rec['form']['frete']??'')?>'></div>
    <div><label>Moeda MIC</label><select name='form[moeda_mic]'><?=options(['Real'=>'Real','Dólar'=>'Dólar'],$rec['form']['moeda_mic']??'Real')?></select></div>
    <div><label>Moeda do Frete</label><select name='form[moeda_frete]'><?=options(['Real'=>'Real','Dólar'=>'Dólar'],$rec['form']['moeda_frete']??'Real')?></select></div>
    <div><label>Origem da Mercadoria</label><input name='form[origem_mercadoria]' value='<?=h($rec['form']['origem_mercadoria']??'BRASILEIRA')?>'></div>
  </div>
</section>
<section id='tab2' class='tab-pane' style='display:none'>
  <div class='grid'>
    <div><label>Quantidade de Volumes</label><input name='form[qtd_volumes]' value='<?=h($rec['form']['qtd_volumes']??'')?>'></div>
    <div><label>Tipo de Volumes</label><input name='form[tipo_volumes]' value='<?=h($rec['form']['tipo_volumes']??'PCT')?>'></div>
    <div><label>Peso Bruto (Kg)</label><input name='form[peso_bruto]' value='<?=h($rec['form']['peso_bruto']??'')?>'></div>
    <div><label>Qtde de Lacres</label><input name='form[qtd_lacres]' value='<?=h($rec['form']['qtd_lacres']??'')?>'></div>
    <div><label>Alfândega Destino</label><input name='form[alfandega_destino]' value='<?=h($rec['form']['alfandega_destino']??'')?>'></div>
    <div><label>Alfândega Partida</label><input name='form[alfandega_partida]' value='<?=h($rec['form']['alfandega_partida']??'')?>'></div>
    <div><label>Cidade Destino</label><input name='form[cidade_destino]' value='<?=h($rec['form']['cidade_destino']??'')?>'></div>
  </div>
</section>
<section id='tab3' class='tab-pane' style='display:none'>
  <div><label>Marcas/Números/Descrição</label><textarea name='form[marcas_numeros]'><?=h($rec['form']['marcas_numeros']??'')?></textarea></div>
  <div><label>Documentos</label><textarea name='form[documentos]'><?=h($rec['form']['documentos']??'')?></textarea></div>
</section>
<section id='tab4' class='tab-pane' style='display:none'>
  <div class='grid'>
    <div><label>Tração Substituto</label><input name='form[substituto_tracao]' value='<?=h($rec['form']['substituto_tracao']??'0')?>'></div>
    <div><label>Reboque Substituto</label><input name='form[substituto_reboque]' value='<?=h($rec['form']['substituto_reboque']??'0')?>'></div>
    <div><label>Semi-reboque Substituto</label><input name='form[substituto_semireboque]' value='<?=h($rec['form']['substituto_semireboque']??'0')?>'></div>
  </div>
</section>
<div class='actions'><button class='btn' type='submit'>Gravar</button><a class='btn sec' href='index.php'>Cancelar</a></div>
</form>
<script>
document.querySelectorAll('.tab').forEach(t=>t.addEventListener('click',e=>{document.querySelectorAll('.tab').forEach(x=>x.classList.remove('active')); t.classList.add('active'); document.querySelectorAll('.tab-pane').forEach(p=>p.style.display='none'); document.getElementById(t.dataset.tab).style.display='block';}));
</script>
<?php include __DIR__.'/../partials/footer.php'; ?>