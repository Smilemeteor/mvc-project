<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="col-md-15" style="margin:20px;">
<div>
<label>数据库<?php echo $table_name; ?>下的表(数据表):</label>
	<a href="javascript:history.back(-1)" style="color:#000;">
	<button style="float:right; margin-top:-10px;" class="btn btn-info" >
	返回上一页
	</button>
	</a>	
	<a href="/TestPractice/Mvc_Project/Table/table_data_insert/table_name/<?php echo $table_name; ?>/base_name/<?php echo $_GET['base_name']; ?>">
	<button style="float:right; margin-top:-10px; margin-right:10px;" class="btn btn-warning" >
	添加
	</button>
	</a>
</div>
	<table class="table table-striped" style="background: #fff; text-align:center;  border-color:#eee;">
		<tr>
			<?php for ($i=0; $i <count($res['value']); $i++) {  ?>
		     		     <td><?php echo $res['value'][$i].'&nbsp;'; ?></td>
		    <?php }?>
		     		     <td>操作</td>
		</tr>
		<?php foreach ($res['data'] as $key => $value): ?>
				<tr>
		    		<?php foreach ($value as $k => $v): ?>
		    			<td><?php echo $value[$k]?></td>
		    		<?php endforeach ?>   	
		    		<td><a href="/TestPractice/Mvc_Project/Table/table_data_delete/id/<?php echo $value['id']; ?>/table_name/<?php echo $_GET['table_name'] ?>/base_name/<?php echo $_GET['base_name']; ?>">删除</a> | <a href="">修改</a></td>	
		    	</tr>
		<?php endforeach ?>
	</table>
</div>