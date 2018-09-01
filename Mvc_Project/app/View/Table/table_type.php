<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="col-md-15" style="margin:20px;">
<div>
<label>数据库<?php echo $table_name; ?>下的表(结构表):</label>
	<a href="javascript:history.back(-1)" style="color:#000;">
	<button style="float:right; margin-top:-10px;" class="btn btn-info" >
	返回上一页
	</button>
	</a>
</div>
	<table border="2"  contenteditable="0" contextmenu="0" class="table table-striped" style="margin-top: 25px; background: #fff; text-align:center;  border-color:#eee; font-size:10px;">
		<tr>
			<td style="width:10%;">序号</td>
			<td style="width:10%;">字段名</td>
			<td style="width:10%;">字段类型</td>
			<td style="width:10%;">整理</td>
			<td style="width:10%;">属性</td>
			<td style="width:10%;">是否为空</td>
			<td style="width:10%;">默认值</td>
			<td style="width:10%;">额外</td>
			<td style="width:10%;">操作</td>
		</tr>
		<?php foreach ($data as $key => $value): ?>	
		<tr>	
			<td style="width:10%;"><?=$ii[$key]?></td>
			<td style="width:10%;"><?=$data[$key]['Field']?></td>
			<td style="width:10%;"><?=$data[$key]['Type']?></td>
			<td style="width:10%;"><?=$data[$key]['Collation']?></td>
			<td style="width:10%;"><?=$data[$key]['Comment']?></td>
			<td style="width:10%;"><?=$data[$key]['Null']?></td>
			<td style="width:10%;"><?=$data[$key]['Default']?></td>
			<td style="width:10%;"><?=$data[$key]['Extra']?></td>
			<td style="width:10%;"><a href="">删除</a>|<a href="">检查权限</a></td>
		</tr>		
<?php endforeach ?>
		</table>
</div>