<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PDF</title>
</head>
<body>
    
    <div class="title-bar">
        <div class="logo">MIC/DTA</div>
         <p>Manifesto Internacional de Carga Rodoviária / Declaração de Trânsito Aduaneiro</p>
         <p>Manifiesto Internacional de Carga por Carretora / Declaración de Trânsito Aduaneiro</p>

    </div>

    <div container="formulario">
        <div class="box" >
        <span class="num">1</span><span class="label">Nome e endereço do transportador/Nome y domicilio del transportador</span>
     <!--  <div class="val"><?=h($f['transportadora']['nome']??'')?></div> -->
         </div>

        <div class="box">
        <span class="num">2</span><span class="label">Cadastro Geral</span>
      <!--  <div class="val"><?=h($f['numero_mic']??'')?></div> -->
        </div>
<!--
      <div class="box3" >
        <span class="num">3</span><span class="label">Nº de expediente</span>
        <div class="val"><?=h($f['expediente']??'')?></div>
      </div>

      <div class="box4">
        <span class="num">4</span><span class="label">Nº de expediente</span>
        <div class="val"><?=h($f['expediente']??'')?></div>
      </div>

      <div class="box5">
        <span class="num">5</span><span class="label">Nº de expediente</span>
        <div class="val"><?=h($f['expediente']??'')?></div>
      </div>

      <div class="box6">
      <span class="num">6</span><span class="label">Data de emissão</span>
      <div class="val"><?=h($f['emissao']??'')?></div>
    </div>

    <div class="box7">
      <span class="num">7</span><span class="label">Aduana, cidade e país de partida</span>
      <div class="val"><?=h($f['alfandega_partida']??'')?></div>
    </div>
    <div class="box8">
      <span class="num">8</span><span class="label">Cidade e país do destino final</span>
      <div class="val"><?=h($f['cidade_destino']??'')?></div>
    </div>

    <div class="box9">
       <span class="num">9</span><span class="label">Caminhão substituto</span>
      <div class="val">Tração: <?=h($f['substituto_tracao']??'0')?> • Reboque: <?=h($f['substituto_reboque']??'0')?> • SR: <?=h($f['substituto_semireboque']??'0')?></div>
    </div>
    <div class="box10">
    <span class="num">10</span><span class="label">Caminhão substituto</span>
      <div class="val">Tração: <?=h($f['substituto_tracao']??'0')?> • Reboque: <?=h($f['substituto_reboque']??'0')?> • SR: <?=h($f['substituto_semireboque']??'0')?></div>
    </div>

    <div class="box''">
      <span class="num">11</span><span class="label">Placa (Tração)</span>
      <div class="val"><?=h($f['tracao']??'')?></div>
    </div>

    <div class="box12">
      <span class="num">12</span><span class="label">Semi-reboque</span>
      <div class="val"><?=h($f['semi_reboque']??'')?></div>
    </div>

    <div class="box13">
      <span class="num">13</span><span class="label">Capacidade (t)</span>
      <div class="val"><?=h($f['capacidade']??'')?></div>
    </div>

    <div class="box14">
      <span class="num">14</span><span class="label">Capacidade (t)</span>
      <div class="val"><?=h($f['capacidade']??'')?></div>
    </div>

    <div class="box15">
      <span class="num">15</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box16">
      <span class="num">16</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box17">
      <span class="num">17</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box18" style="min-height:14mm;">
      <span class="num">18</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box19">
      <span class="num">19</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box20">
      <span class="num">20</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box21">
      <span class="num">15</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

    <div class="box22">
      <span class="num">22</span><span class="label">Tipo de veículo</span>
      <div class="val"><?=h($f['tipo_veiculo']??'')?></div>
    </div>

     <div class="box23" style="min-height:14mm;">
      <span class="num">23</span><span class="label">Remetente</span>
      <div class="val"><?=h($f['remetente']['nome']??'')?></div>
    </div>

     <div class="box24">
      <span class="num">24</span><span class="label">Remetente</span>
      <div class="val"><?=h($f['remetente']['nome']??'')?></div>
    </div>

    <div class="box25">
      <span class="num">25</span><span class="label">Moeda</span>
      <div class="val"><?=h($f['moeda_mic']??'')?></div>
    </div>


    <div class="box26">
      <span class="num">26</span><span class="label">Origem das mercadorias</span>
      <div class="val"><?=h($f['origem_mercadoria']??'')?></div>
    </div>


    <div class="box27">
      <span class="num">27</span><span class="label">Valor FOT</span>
      <div class="val"><?=h($f['valor_fot']??'')?></div>
    </div>


    <div class="box28">
      <span class="num">28</span><span class="label">Frete</span>
      <div class="val"><?=h($f['frete']??'')?> (<?=h($f['moeda_frete']??'')?>)</div>
    </div>
  
    <div class="box29">
      <span class="num">29</span><span class="label">Frete</span>
      <div class="val"><?=h($f['frete']??'')?> (<?=h($f['moeda_frete']??'')?>)</div>
    </div>

    <div class="box30">
      <span class="num">30</span><span class="label">Tipo dos volumes</span>
      <div class="val"><?=h($f['tipo_volumes']??'')?></div>
    </div>


    <div class="box31">
      <span class="num">31</span><span class="label">Quantidade de volumes</span>
      <div class="val"><?=h($f['qtd_volumes']??'')?></div>
    </div>


    <div class="box32">
      <span class="num">32</span><span class="label">Peso bruto (kg)</span>
      <div class="val"><?=h($f['peso_bruto']??'')?></div>
    </div>

    <div class="box33">
      <span class="num">33</span><span class="label">Tipo dos volumes</span>
      <div class="val"><?=h($f['tipo_volumes']??'')?></div>
    </div>


    <div class="box34">
      <span class="num">34</span><span class="label">Quantidade de volumes</span>
      <div class="val"><?=h($f['qtd_volumes']??'')?></div>
    </div>


    <div class="box35">
      <span class="num">35</span><span class="label">Peso bruto (kg)</span>
      <div class="val"><?=h($f['peso_bruto']??'')?></div>
    </div>

    <div class="box36">
      <span class="num">36</span><span class="label">Documentos anexos</span>
      <div class="val"><?=nl2br(h($f['documentos']??''))?></div>
    </div>

    <div class="box37" style="min-height:14mm;">
      <span class="num">37</span><span class="label">Documentos anexos</span>
      <div class="val"><?=nl2br(h($f['documentos']??''))?></div>
    </div>
    
    <div class="box38">
    <span class="num">38</span><span class="label">Marcas e números dos volumes / Descrição das mercadorias</span>
    <div class="val"><?=nl2br(h($f['marcas_numeros']??''))?></div>

    <div class="box39">
      <span class="num">39</span><span class="label">Assinatura e carimbo do transportador</span>
      <div class="val">Data: ____/____/______</div>
    </div>

    <div class="box40" style="min-height:18mm;">
      <span class="num">40</span><span class="label">Assinatura e carimbo do transportador</span>
      <div class="val">Data: ____/____/______</div>
    </div>

    <div class="box41" style="min-height:18mm;">
      <span class="num">41</span><span class="label">Assinatura e carimbo da Aduana de partida</span>
      <div class="val">Data: ____/____/______</div>
    </div>


</div>





   
    
</body>
</html>