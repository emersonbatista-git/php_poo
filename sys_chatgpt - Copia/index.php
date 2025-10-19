<?php $p=$_GET['page']??'list'; 
 switch
 ($p) {
 case 'new':case 'edit': require __DIR__.'/pages/mic_form.php';
 break;
 case
  'view': require __DIR__.'/pages/view.php';
  break;
  default: require __DIR__.'/pages/list.php'; } 
  
  
  ?>