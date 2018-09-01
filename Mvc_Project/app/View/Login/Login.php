<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1532080796527&di=d79ef3aef222f5a85ec669eeafb9d702&imgtype=0&src=http%3A%2F%2Fpic.xiudodo.com%2Ffigure%2F00%2F00%2F33%2F16%2F73%2F1655bda6abbcd26.jpg"><br><br><br>
	<div class="container">
	<div style="height:40px;"></div>
	<form action="login" method="post">
	<div class="row">
	  <div style="background:#fff;" class="col-md-6 col-md-offset-3">
		<h2>Welcome To Use <b style="color:rgb(255,153,0)">MyAdmin</b></h2><hr><div class="text-center">
		<a title="登录界面" class="glyphicon glyphicon-send" style="line-height: 30px; font-size:22px;"><i>Login</i></a>
		</div>
		<div class="form-group" style="font-size:20px;">
	    <label for="exampleInputEmail1">UserName</label>
	    <input type="text" class="form-control" name='username' id="name">
		<span id="names" style="font-size:10px; line-height:25px; float:right;"></span>

	  	</div>

	  	<div class="form-group" style="font-size:20px;">
	    <label for="exampleInputEmail1">Password</label>
	    <input type="text" class="form-control" name='password' id="pwd">
		<span id="pwds" style="font-size:10px; line-height:25px; float:right;"></span>

	  	</div>

	      <div class="checkbox" style="margin-top:20px;">
	        <label>
	          <input type="checkbox"> Remember me
	        </label>
	      </div>
	  	<div id="button" class="form-group" style="font-size:20px;">
	    <input type="submit" value="Execute" style="float:right;" title="填写正确后点击登录" class="btn btn-primary" >
	  	</div><br><br>
	  </div>
	</div>
	</form> 
	</div>
</body>
<?php include "./public/html/bottom.php" ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="./public/js/login.js"></script>
</html>