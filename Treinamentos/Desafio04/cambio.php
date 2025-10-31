    <?php 
    $inicio = date("m-d-Y", strtotime("-7 days")); /*considerar 7 dias antes */
    $fim = date("m-d-Y");
        
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];










    $valor = $_GET['valor'] ?? 1;
    $cot = $cotacao;

    $dolar = $valor / $cot;

    echo "Cotação do dia 31/10/2025: " . $cotacao;
    echo "<br>A quantia de R$ " . number_format($valor,2, ",",".") . " equivale a US$ " . number_format($dolar,2,",","." );
    
    
    ?>
    
</body>
</html>