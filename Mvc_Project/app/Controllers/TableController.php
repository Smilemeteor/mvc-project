<?php 
namespace app\Controllers;
use \lib\Controller;
use \lib\Model_Project;
class TableController extends Controller
{
	public function Index()
	{
		$model = new Model_Project;
		@$base_name = $_GET['base_name'];
		if (!empty($base_name)) {
			$data = $model->table_name($base_name);
			foreach ($data as $key => $value) {
				$value=implode(',',array_keys($value));
			}
			$data['show']=$data;
			@$data['value']=$value;
			$this->assign('base_name',$base_name);
			$this->assign('data',$data);
			$this->display();
		}
		else
		{
			$this->display('base_null');
		}
	}

	public function table_data()
	{
		$table_name=$_GET['table_name'];
		$base_name=$_GET['base_name'];
		$model = new Model_Project();
		$data = $model->table_data($table_name,$base_name);
		foreach ($data as $key => $value) {
			$arr=implode(',',array_keys($value));
		}
		if (empty($arr)) {
			$this->assign('base_name',$base_name);
			$this->assign('table_name',$table_name);
			$this->display('table_null');die;
		}
		@$show=explode(',',$arr);
		$res['data']=$data;
		$res['value']=$show;
		$this->assign('res',$res);
		$this->assign('base_name',$base_name);
		$this->assign('table_name',$table_name);
		$this->display();
	}

	public function table_data_insert()
	{
		$model = new Model_Project();
		if (!$_POST) {
			$table_name = $_GET['table_name'];
			$base_name = $_GET['base_name'];
			// $base_name=explode('_',$base_name);
			// array_shift($base_name);
			// array_shift($base_name);
			// $basename=array_shift($base_name);
			$data = $model->table_data($table_name,$base_name);
			foreach ($data as $key => $value) {
				$arr=implode(',',array_keys($value));
			}
			@$show=explode(',',$arr);
			$res['data']=$data;
			$res['value']=$show;
			$this->assign('res',$res);
			$this->assign('base_name',$base_name);
			$this->assign('table_name',$table_name);
			$this->display();
		}else{
			$table_name = $_GET['table_name'];
			$base_name = $_GET['base_name'];
			$data = $_POST;
			$res = $model->table_data_insert($table_name,$base_name,$data);
			if ($res) {
				echo "<script>alert('添加成功');location.href='/TestPractice/Mvc_Project/Table/table_data/base_name/$base_name/table_name/$table_name'</script>";
			}else{
				echo "<script>alert('添加失败');location.href='/TestPractice/Mvc_Project/Table/table_data/base_name/$base_name/table_name/$table_name'</script>";
			}
		}
	}

	public function table_type()
	{
		$base_name = $_GET['base_name'];
		$table_name = $_GET['table_name'];
		@mysql_connect("127.0.0.1","root","root");
		mysql_select_db("$base_name");
		$res = mysql_query("SHOW FULL FIELDS FROM $table_name");
		$ress = mysql_query("SHOW FULL FIELDS FROM $table_name");
		for ($i=1; $i < mysql_fetch_row($ress); $i++) { 
			
			$ii[] = $i;
		}
		while($row = mysql_fetch_array($res)){
		 	
		 	$data[] = $row;
		}
		// echo "</pre>";
		// print_r($data);
		$this->assign("ii",$ii);
		$this->assign("data",$data);
		$this->assign("table_name",$table_name);
		$this->assign("base_name",$base_name);
		$this->display();
	}
		// $table_name = $_GET['table_name'];
		// $base_name = $_GET['base_name'];
		// $model = new Model_Project();
		// $res = $model->table_type($table_name,$base_name);
		// foreach ($res as $key => $value) {
		// 	$arr=implode(',',array_keys($value));
		// }
		// $show=explode(',',$arr);
		// $res['data']=$res;
		// $res['value']=$show;
		// $this->assign('data',$res);
		// $this->assign('base_name',$base_name);
		// $this->assign('table_name',$table_name);
		// $this->display();
	public function table_name_update()
	{
		if (!$_POST) {
			$base_name = $_GET['base_name'];
			$table_name = $_GET['table_name'];
			$this->assign('base_name',$base_name);
			$this->assign('table_name',$table_name);
			$this->display();
		}else{
			$base_name = $_POST['base_name'];
			$table_name = $_POST['table_name'];
			$new_table_name = $_POST['new_table_name'];
			if (!empty($new_table_name)) {
			$model = new Model_Project;
			$res = $model->table_name_update($base_name,$table_name,$new_table_name);
			if (!$res) {
				echo "<script>alert('修改成功');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name'</script>";
			}
			else
			{
				echo "<script>alert('修改失败');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name'</script>";
			}
		}
		else
		{
		echo "<script>alert('修改失败');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name''</script>";
			}
		}
	}
	public function table_type_insert()
	{
		$base_name= $_POST['base_name'];
		$table_name= $_POST['table_name'];
		$this->assign('table_name',$table_name);
		$this->assign('base_name',$base_name);
		$this->display();	
	}
	public function table_name_delete()
	{
		$table_name=$_GET['table_name'];
		$base_name=$_GET['base_name'];
		$model = new Model_Project();
		$data = $model->table_name_delete($base_name,$table_name);
		// var_dump($data);die;
		if(!$data){
			echo "<script>alert('删除表成功');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name'</script>";
		}else{
			echo "<script>alert('删除表失败');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name'</script>";
		}
	}

	public function table_data_delete()
	{
		$id = $_GET['id'];
		$base_name = $_GET['base_name'];
		$table_name = $_GET['table_name'];
		$model = new Model_Project;
		$res = $model->table_data_delete($table_name,$base_name,$id);
		if ($res) {
			echo "<script>alert('删除数据成功');location.href='/TestPractice/Mvc_Project/Table/table_data/base_name/$base_name/table_name/$table_name'</script>";
		}
		else
		{
			echo "<script>alert('删除数据失败');location.href='/TestPractice/Mvc_Project/Table/table_data/base_name/$base_name/table_name/$table_name'</script>";
		}
	}

	public function table_name_insert()
	{
		$base_name=$_GET['base_name'];
		$this->assign('base_name',$base_name);
		$this->display();
	}

	public function table_type_insert_do()
	{
		$data = $_POST;
		$name = $_POST['name'];
		$type = $_POST['type'];
		$lang = $_POST['lang'];
		$zhengli = $_POST['zhengli'];
		$default = $_POST['default'];
		$table_name = $_GET['table'];
		$base_name = $_GET['base'];
		mysql_connect("127.0.0.1","root","root");
		mysql_select_db("$base_name");
		$sql = "CREATE TABLE $table_name($name $type($lang))";
		$res = mysql_query($sql);
		if ($res) {
			echo "<script>alert('表添加成功');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name'</script>";
		}else{
			echo "<script>alert('表添加失败');location.href='/TestPractice/Mvc_Project/table/index/base_name/$base_name'</script>";
		}
	}
}