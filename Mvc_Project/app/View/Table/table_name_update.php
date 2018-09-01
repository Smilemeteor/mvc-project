<?php header('content-type:text/html;charset=utf8'); ?>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<center>
<div class="col-md-15" style="margin:150px;">
<div>
	<form action="/TestPractice/Mvc_Project/table/table_name_update" method="post">
		<label>当前数据库：<?php echo $base_name; ?>&nbsp;&nbsp;&nbsp;&nbsp;原表名：<?php echo $table_name; ?></label><br>
		<input type="text" hidden="hidden" name="base_name" value="<?php echo $base_name; ?>">
		<input type="text" hidden="hidden" name="table_name" value="<?php echo $table_name; ?>">
		<input type="text" name="new_table_name"> 
		<input type="submit" value="修改表名">
	</form>
</div>
</div></center>