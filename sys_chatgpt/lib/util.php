<?php
function h($s){ return htmlspecialchars($s??'', ENT_QUOTES,'UTF-8'); }
function get($k,$d=''){ return $_GET[$k]??$d; }
function options($arr,$sel=''){ $html=''; foreach($arr as $v=>$l){ $s=((string)$v===(string)$sel)?'selected':''; $html.="<option value=''.h($v).'' $s>".h($l)."</option>"; } return $html; }
?>