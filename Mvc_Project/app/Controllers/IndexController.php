<?php 
namespace app\Controllers;
use \lib\Controller;
class IndexController extends Controller
{
	public function Index()
	{
		$this->display();
	}
	public function Show()
	{
		$this->display();
	}
	public function error()
	{
		echo "<center><h3>如果不学习，跟咸鱼有什么区别?</h3></center>";
		$this->display('error');
	}
}