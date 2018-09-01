<?php 
namespace app\Controllers;
use \lib\Controller;
use \app\Model\Login;
class LoginController extends Controller
{
	public function login()
	{
		if (!$_POST) {
			$this->display();
		}else{
			$username = 'root';
			$password = 'root';
	    	$name=$_POST['username'];
	    	$pwd=$_POST['password'];
	    	if ($name!=$username) {
	    		echo "<script>alert('用户名输入错误');location.href='/TestPractice/Mvc_Project/Login/login'</script>";
	    	}if ($pwd!=$password) {
	    		echo "<script>alert('密码输入错误');location.href='/TestPractice/Mvc_Project/Login/login'</script>";
	    	}else{
	    		echo "<script>alert('登录成功');location.href='/TestPractice/Mvc_Project/index/index'</script>";
	    	}
		}
	}
}