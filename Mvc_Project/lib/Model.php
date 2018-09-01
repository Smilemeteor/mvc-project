<?php 
namespace lib;
class Model
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
	function fetch()
	{
		return $this->pdo->query('select * from '.$this->table.$this->where)->fetch(\PDO::FETCH_ASSOC);
	}
	function fetchAll()
	{
		return $this->pdo->query('select * from '.$this->table.$this->where)->fetchAll(\PDO::FETCH_ASSOC);
	}
	function delete($id=null)
	{
			if($id&&$this->where){
				$where = 'id='.$id;
				$this->where .= ' and '.$where;
			}else if($id&&!$this->where){
				$this->where = ' where id='.$id;
			}
			return $this->pdo->exec('delete from '.$this->table.$this->where);
	}
	function update($arr=null)
	{
		$sql='update '.$this->table.' set ';
		$str='';
		foreach ($arr as $key => $value) {
			$str.=$key.'="'.$value.'",';
		}
		$str=rtrim($str,',');
		$sql.=$str.$this->where;
		// echo $sql;die;
		$res=$this->pdo->exec($sql);
		return $res; 
	}
	function insert($data)
	{
		$key=implode(',', array_keys($data));
		$value=implode('","', array_values($data));
		$values='"'.$value.'"';
		return $this->pdo->exec('insert into '.$this->table.'('.$key.') values ('.$values.')');
	}
}