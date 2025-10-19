<?php
require_once __DIR__.'/../lib/storage.php'; require_once __DIR__.'/../lib/util.php';
$db=new FileDB(__DIR__.'/../data/mic'); $items=$db->all(); include __DIR__.'/../partials/header.php'; ?>
<div class='card'><h2>Registros</h2><table><thead><tr><th>Nº MIC</th><th>Remetente</th><th>Destinatário</th><th>Valor FOT</th><th>Atualizado</th><th>Ações</th></tr></thead><tbody>
<?php foreach($items as $r): ?><tr>
<td><span class='badge'><?=h($r['form']['numero_mic']??'')?></span></td>
<td><?=h($r['form']['remetente']['nome']??'')?></td><td><?=h($r['form']['destinatario']['nome']??'')?></td>
<td><?=h($r['form']['valor_fot']??'')?></td><td><?=h(date('d/m/Y H:i',strtotime($r['updated_at']??'now')))?></td>
<td><a class='btn sec' href='index.php?page=edit&id=<?=h($r['id'])?>'>Editar</a>
<a class='btn sec' href='index.php?page=view&id=<?=h($r['id'])?>'>Ver</a>
<a class='btn sec' href='actions/delete.php?id=<?=h($r['id'])?>' onclick='return confirm("Excluir?")'>Excluir</a></td></tr><?php endforeach; ?>
</tbody></table></div><?php include __DIR__.'/../partials/footer.php'; ?>