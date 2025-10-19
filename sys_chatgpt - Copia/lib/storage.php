<?php
class FileDB {
  private $baseDir;
  public function __construct($baseDir){ $this->baseDir=rtrim($baseDir,'/'); if(!is_dir($this->baseDir)) mkdir($this->baseDir,0777,true); }
  private function safe($s){ return preg_replace('/[^a-zA-Z0-9_\-]/','_', $s); }
  public function all(){ $items=[]; foreach(glob($this->baseDir.'/*.json') as $f){ $o=json_decode(file_get_contents($f),true); if($o)$items[]=$o; } usort($items,function($a,$b){return strtotime($b['updated_at']??'now')<=>strtotime($a['updated_at']??'now');}); return $items; }
  public function find($id){ $f=$this->baseDir.'/'.$this->safe($id).'.json'; return file_exists($f)? json_decode(file_get_contents($f),true):null; }
  public function save($id,$data){ if(!$id)$id=strtoupper(bin2hex(random_bytes(4))).'-'.date('Ymd-His'); $data['id']=$id; if(!isset($data['created_at']))$data['created_at']=date('c'); $data['updated_at']=date('c'); file_put_contents($this->baseDir.'/'.$this->safe($id).'.json', json_encode($data,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE)); return $id; }
  public function delete($id){ $f=$this->baseDir.'/'.$this->safe($id).'.json'; if(file_exists($f)) unlink($f); }
}?>