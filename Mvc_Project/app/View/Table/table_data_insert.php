<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="col-md-15" style="margin:20px;">
<div>
<label>数据库<?php echo $_GET['base_name']; ?>下的表( <?php echo $table_name; ?>):</label>
	<a href="javascript:history.back(-1)" style="color:#000;">
	<button style="float:right; margin-top:-10px;" class="btn btn-info" >
	返回上一页
	</button>
	</a>
</div>
<form action="/TestPractice/Mvc_Project/Table/table_data_insert/base_name/<?php echo $_GET['base_name']; ?>/table_name/<?php echo $_GET['table_name']; ?>" method="post">
	<table class="table table-striped" style="background: #fff; text-align:center;  border-color:#eee;">
			<?php for ($i=0; $i <count($res['value']); $i++) {  ?>
		     	<tr><td style='width:100px;'><?php echo $res['value'][$i]; ?></td><td><input  class="form-control" type="text" name='<?php echo $res['value'][$i]; ?>'></td></tr>
		    <?php }?>
	</table>
	
	<button type="submit" style="float:right;" margin-top:-10px; margin-right:10px;" class="btn btn-warning" >
	添加
	</button>
</form>
</div>