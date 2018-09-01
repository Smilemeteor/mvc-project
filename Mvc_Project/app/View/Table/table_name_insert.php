<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<center>
<div class="col-md-15" style="margin:150px;">
<div>
<a href="javascript:history.back(-1)" style="color:#000;">
	<button style="float:right; margin-top:-10px;" class="btn btn-info" >
	返回上一页
	</button>
	</a>
	<form action="/TestPractice/Mvc_Project/table/table_type_insert" method="post">
		<label>当前数据库：<?php echo $base_name; ?></label><br>
		<input type="text" hidden="hidden" name="base_name" value="<?php echo $base_name; ?>">
		<input type="text" name="table_name"> 
		<input type="submit" value="新建表">
	</form>
</div>
</div></center>