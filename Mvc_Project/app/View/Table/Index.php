<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="col-md-15" style="margin:20px;">
<div>
<label>数据库<a href="/TestPractice/Mvc_Project/base/Index"><?php echo $base_name; ?></a>下的表:</label>
	<a  href='/TestPractice/Mvc_Project/table/table_name_insert/base_name/<?php echo $base_name; ?>' style="color:#000;">
	<button style="float:right" class="btn btn-info" >
	新建表
	</button>
	</a>
</div>
	<table class="table table-striped" style="margin-top: 25px; background: #fff; text-align:center;  border-color:#eee;">
		<tr>
			<td>#</td>
	  		<td>表名称</td>
	  		<td>操作</td>
		</tr>
		<?php foreach ($data['show'] as $key => $value): ?>
		<tr>
			<td><input type="checkbox"></td>
			<td><a href="/TestPractice/Mvc_Project/Table/table_data/table_name/<?php echo $value[$data['value']]?>/base_name/<?php echo $_GET['base_name']?>"><?php echo $value[$data['value']]?></a></td>
			<td><a href="
			/TestPractice/Mvc_Project/Table/table_type/table_name/<?php echo $value[$data['value']]?>/base_name/<?php echo $base_name; ?>
			">表结构</a> | <a href="/TestPractice/Mvc_Project/table/table_name_update/base_name/<?php echo $base_name;?>/table_name/<?php echo $value[$data['value']]?>">修改</a> | <a href="/TestPractice/Mvc_Project/table/table_name_delete/base_name/<?php echo $base_name;?>/table_name/<?php echo $value[$data['value']]?>">删除</a></td>
		</tr>
		<?php endforeach ?>
	</table>
</div>