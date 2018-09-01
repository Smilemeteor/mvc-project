<?php 
namespace app\Controllers;
use \lib\Controller;
use \lib\Model_Project;
class BaseController extends Controller
{
	public function index()
	{
		$model = new Model_Project;
		$res = $model->base_name();
		// var_dump($res);
		$this->assign('res',$res);
		$this->display();
	}
	public function base_insert()
	{
		$model = new Model_Project;
		$base_name = $_POST['base_name'];
		$arr = $model->base_insert($base_name);
		if($arr){
    		echo "<script>alert('数据库创建成功');location.href='/TestPractice/Mvc_Project/Base/Index'</script>";
    	}else{
    		echo "<script>alert('添加失败');location.href='/TestPractice/Mvc_Project/Base/Index'</script>";
		}
	}
	public function base_delete()
	{
		$model = new Model_Project;
		$base_name = $_GET['base_name'];
		$arr = $model->base_delete($base_name);
		if (!$arr) {
    		echo "<script>alert('删除成功');location.href='/TestPractice/Mvc_Project/Base/Index'</script>";
		}else{
    		echo "<script>alert('删除失败');location.href='/TestPractice/Mvc_Project/Base/Index'</script>";
		}
	}
}