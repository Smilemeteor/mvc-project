<?php 
namespace lib;
class Mvc
{
	public $c = 'login';
	public $a = 'login';

	//框架初始化
	public function action ()
	{
		$this->setConfig();
		spl_autoload_register('self::autoload');
		$this->route();
	}
	public function setConfig()
	{
		$arr = include(PATH.'config/config.php');
		foreach ($arr as $key => $value) {
			define($key,$value);
		}
	}
	public function route()
	{
		$uri = $_SERVER['REQUEST_URI'];
		if ($uri!='/TestPractice/Mvc_Project/'&&$uri) {
			$arr = explode('/',$uri);
			array_shift($arr);
			array_shift($arr);
			array_shift($arr);
			$c = array_shift($arr);
			$b = ucwords($c).'Controller';
			$a = array_shift($arr);
			$a = isset($a)?$a:$this->a;
			if (!empty($arr)) 
			{
				$count = count($arr);
				for ($i=0; $i < $count ; $i=$i+2) { 
				$_GET[$arr[$i]]=$arr[$i+1];
				}
			}
		}
		else
		{
			$c = $this->c;
			$b = ucwords($c).'Controller';
			$a = $this->a;
		}
		$b = '\\app\\Controllers\\'.$b;
		if(!class_exists($b))
		{
			echo "控制器不存在！".$b;die;
		}
		$controller = new $b($c,$a);
		if (!method_exists($controller,$a)) {
			echo "类方法不存在！".$a;die;
		}
		$controller->$a();
	}
	public function autoload($className)
	{
		$file = PATH.$className.'.php';
		include_once $file;
	}
}