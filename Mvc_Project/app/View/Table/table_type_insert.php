<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="col-md-15" style="margin:10px;">
<label style="margin-bottom:15px;">为数据库<?php echo $base_name; ?>创建表(<?php echo $table_name; ?>):</label>
<a href="javascript:history.back(-1)" style="color:#000;">
	<button style="float:right; margin-top:-10px;" class="btn btn-info">
	返回上一页
	</button>
	</a>
<center>
<form action="/TestPractice/Mvc_Project/table/table_type_insert_do/table/<?php echo $table_name; ?>/base/<?php echo $base_name; ?>" method="post">
	<table cellpadding="0" cellspacing="0" class="table table-striped" style="font-size:12px; width:100%; text-align:center;">
			<tr style="width:100%;">
				<td width="15%">名字</td>
				<td width="15%">类型</td>
				<td width="15%">长度/值</td>
				<td width="15%">默认</td>
				<td width="15%">整理</td>
				<td width="15%">操作</td>
			</tr>
			<tr style="width:100%;" id="box1">
				<td><input type="text" name="name"></td>
				<td>
					<select name="type" id="" style="width:100%;height:23px;">
						<option value="int">int</option>
						<option value="varchar">varchar</option>
						<option value="date">date</option>
						<option value="text">text</option>
					</select>
				</td>
				<td><input type="text" name="lang"></td>
				<td>
					<select name="default" id="" style="width:100%;height:23px;>		
						<option value=""></option>
						<option value="0">0</option>
					</select>
				</td>
				<td>
					<select name="zhengli" id="" style="width:100%;height:23px;>
						<option value="utf8_general_ci">utf8_general_ci</option>
						<option value=""></option>
					</select>
				</td>
				<td><span id='jia'>+</span></td>
			</tr>
		</table>
		<input type="text" value="<?php echo $table_name; ?>" hidden='hidden'><input type="submit" style="height:22px; float:right;" class="btn btn-info" value="执行">
</form>
</center>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script>
	$(document).on("click","#jia",function(){
		var str = $('#jia').parents("tr").html();
		$("#box1").after(str);
	})
</script>