<?php 
namespace lib;

class Controller
{
   public $data;
   public $c;
   public $a;
   public function __construct($c,$a)
   {
   	$this->c = $c;
   	$this->a = $a;
   }
   function assign($key,$value)
   {
   	$this->data[$key]=$value;     
   }
   function display($view = null)
   {
   	if (!$view) {
   		$view = $this->a;
   	}
   	@extract($this->data);
   	include_once APP_PATH.'/view/'.$this->c.'/'.$view.'.php';
   }
}