<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><div class="col-md-15" style="margin:10px;">
 	<label>新建数据库</label>
		<form action="/TestPractice/Mvc_Project/base/base_insert" method="post">
		  <div class="form-group">
		    <input style=" width:200px; float: left; margin-right: 5px; " type="text" class="form-control" name="base_name" placeholder="数据库名称">
		  </div>&nbsp;
		  <button style="border-radius:20px;" type="submit" class="btn btn-default">创建</button>
		</form>
		<table class="table table-striped" style="margin-top: 25px; background: #fff;  text-align:center; border-color:#eee;">
			<tr>
				<td>#</td>
		  		<td>数据库名称</td>
		  		<td>操作</td>
			</tr>

			<?php foreach ($res as $key => $v): ?>
			<tr>
  				<td><input class='chk' name='chk'  type='checkbox' value="<?php echo $v['Database']; ?>"/></td>
  				<td><a href="/TestPractice/Mvc_Project/Table/Index/base_name/<?php echo $v['Database']; ?>"><?php echo $v['Database']; ?></a></td>
				<td><a href="">检查权限</a>| <a href="/TestPractice/Mvc_Project/base/base_delete/base_name/<?php echo $v['Database']; ?>">删除</a></td>
			</tr>
			<?php endforeach ?>
		</table>
	<div style="float:right;">
			<input type="button" value="全选" class="btn btn-info" disabled>
			<input id="delete" type="button" value="删除"  class="btn btn-warning" disabled>
	</div>
	</div>