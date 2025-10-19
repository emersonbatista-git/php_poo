<?php // fragment used by HTML and PDF (A4 layout in mm) ?>
<div class="sheet">

  <div class="box">
    <div class="title-bar">MIC/DTA – Manifesto Internacional de Carga Rodoviária / Declaração de Trânsito Aduaneiro</div>
    <div class="grid g3">
      <div class="box" style="min-height:18mm;">
        <span class="num">1</span><span class="label">Transportador (nome/endereço)</span>
        <div class="val"><?=h($f['transportadora']['nome']??'')?></div>
      </div>
      <div class="box" style="min-height:18mm;">
        <span class="num">2</span><span class="label">Nº MIC / Série</span>
        <div class="val"><?=h($f['numero_mic']??'')?></div>
      </div>
      <div class="box" style="min-height:18mm;">
        <span class="num">4</span><span class="label">Nº de expediente</span>
        <div class="val"><?=h($f['expediente']??'')?></div>
      </div>
    </div>
  </div>

  <div class="grid g2" style="margin-top:2.5mm;">
    <div class="box" style="min-height:14mm;">
      <span class="num">6</span><span class="label">Data de emissão</span>
      <div class="val"><?=h($f['emissao']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">7</span><span class="label">Aduana, cidade e país de partida</span>
      <div class="val"><?=h($f['alfandega_partida']??'')?></div>
    </div>
  </div>

  <div class="grid g2" style="margin-top:2.5mm;">
    <div class="box" style="min-height:14mm;">
      <span class="num">8</span><span class="label">Cidade e país do destino final</span>
      <div class="val"><?=h($f['cidade_destino']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">9</span><span class="label">Caminhão substituto</span>
      <div class="val">Tração: <?=h($f['substituto_tracao']??'0')?> • Reboque: <?=h($f['substituto_reboque']??'0')?> • SR: <?=h($f['substituto_semireboque']??'0')?></div>
    </div>
  </div>

  <div class="grid g4" style="margin-top:2.5mm;">
    <div class="box" style="min-height:14mm;">
      <span class="num">11</span><span class="label">Placa (Tração)</span>
      <div class="val"><?=h($f['tracao']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">12</span><span class="label">Semi-reboque</span>
      <div class="val"><?=h($f['semi_reboque']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">13</span><span class="label">Capacidade (t)</span>
      <div class="val"><?=h($f['capacidade']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">15</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>
  </div>

  <div class="grid g2" style="margin-top:2.5mm;">
    <div class="box" style="min-height:14mm;">
      <span class="num">23</span><span class="label">Remetente</span>
      <div class="val"><?=h($f['remetente']['nome']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">35</span><span class="label">Consignatário</span>
      <div class="val"><?=h($f['consignatario']['nome']??'')?></div>
    </div>
  </div>

  <div class="grid g4" style="margin-top:2.5mm;">
    <div class="box" style="min-height:14mm;">
      <span class="num">25</span><span class="label">Moeda</span>
      <div class="val"><?=h($f['moeda_mic']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">26</span><span class="label">Origem das mercadorias</span>
      <div class="val"><?=h($f['origem_mercadoria']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">27</span><span class="label">Valor FOT</span>
      <div class="val"><?=h($f['valor_fot']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">28</span><span class="label">Frete</span>
      <div class="val"><?=h($f['frete']??'')?> (<?=h($f['moeda_frete']??'')?>)</div>
    </div>
  </div>

  <div class="grid g4" style="margin-top:2.5mm;">
    <div class="box" style="min-height:14mm;">
      <span class="num">30</span><span class="label">Tipo dos volumes</span>
      <div class="val"><?=h($f['tipo_volumes']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">31</span><span class="label">Quantidade de volumes</span>
      <div class="val"><?=h($f['qtd_volumes']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">32</span><span class="label">Peso bruto (kg)</span>
      <div class="val"><?=h($f['peso_bruto']??'')?></div>
    </div>
    <div class="box" style="min-height:14mm;">
      <span class="num">36</span><span class="label">Documentos anexos</span>
      <div class="val"><?=nl2br(h($f['documentos']??''))?></div>
    </div>
  </div>

  <div class="box" style="margin-top:2.5mm; min-height:40mm;">
    <span class="num">38</span><span class="label">Marcas e números dos volumes / Descrição das mercadorias</span>
    <div class="val"><?=nl2br(h($f['marcas_numeros']??''))?></div>
  </div>

  <div class="grid g2 footer" style="margin-top:2.5mm;">
    <div class="box" style="min-height:18mm;">
      <span class="num">39</span><span class="label">Assinatura e carimbo do transportador</span>
      <div class="val">Data: ____/____/______</div>
    </div>
    <div class="box" style="min-height:18mm;">
      <span class="num">41</span><span class="label">Assinatura e carimbo da Aduana de partida</span>
      <div class="val">Data: ____/____/______</div>
    </div>
  </div>

</div>
