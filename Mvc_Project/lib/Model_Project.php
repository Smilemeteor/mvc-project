<?php 
namespace lib;
class Model_Project
{
	public $pdo;
	public $table;
	public $where;
	function __construct()
	{
		$this->pdo = new \PDO('mysql:host='.host.';dbname='.dbname,user,pwd);
		$arr = explode('\\',get_class($this));
		$this->table = strtolower(end($arr));	
	}
// base
	//查库
	function base_name()
	{
		return $this->pdo->query('SHOW DATABASES')->fetchAll(\PDO::FETCH_ASSOC);
	}
	//创建库
	function base_insert($base_name)
	{
		return $this->pdo->exec('CREATE DATABASE '.$base_name);
	}
	//删除库
	function base_delete($base_name)
	{
		return $this->pdo->exec('DROP DATABASE '.$base_name);
	}
//table
	//查表
	function table_name($base_name)
	{
		$this->pdo->exec('use '.$base_name);
		return $this->pdo->query('show tables')->fetchAll(\PDO::FETCH_ASSOC);
	}
	//表数据
	function table_data($base_name,$table_name){
		$this->pdo->exec('use '.$table_name);
		return $this->pdo->query('select * from '.$base_name)->fetchAll(\PDO::FETCH_ASSOC);
	}
	//表结构
	// function table_type($table_name,$base_name)
	// {
	// 	$this->pdo->exec('use '.$base_name);
	// 	return $this->pdo->query('DESCRIBE '.$table_name)->fetchAll(\PDO::FETCH_ASSOC);	
	// }
	//表名修改
	function table_name_update($base_name,$table_name,$new_table_name)
	{
		$this->pdo->exec('use '.$base_name);
		return $this->pdo->exec("RENAME TABLE ".$table_name." TO ".$new_table_name." ");
	}
	//表名删除
	function table_name_delete($table_name,$base_name){
		$this->pdo->exec('use '.$table_name);
		return $this->pdo->exec('drop table '.$base_name);
	}
//数据
	//数据添加
	function table_data_insert($table_name,$base_name,$data){
		$this->pdo->exec('use '.$base_name);
		$key=implode('`,`', array_keys($data));
		$value=implode('","', array_values($data));
		$values='"'.$value.'"';
		return $this->pdo->exec('insert into '.$table_name.'(`'.$key.'`) values ('.$values.')');
	}
	//数据删除
	function table_data_delete($table_name,$base_name,$id=null)
	{
		$this->pdo->exec('use '.$base_name);
		if($id&&$this->where){
				$where = 'id='.$id;
				$this->where .= ' and '.$where;
			}else if($id&&!$this->where){
				$this->where = ' where id='.$id;
			}
		return $this->pdo->exec('delete from '.$table_name.$this->where);
	}

//Mysql
	function where($arr = null){
		if(!empty($arr)){
			if(is_array($arr)){
				$where = ' where ';
				foreach ($arr as $key => $value) {
					$where .= $key.'="'.$value.'" and ';
				}
				$where = rtrim($where,' and');
			}else{
				$where = ' where '.$arr;
			}
			$this->where = $where;
			return $this;
		}
	}
}