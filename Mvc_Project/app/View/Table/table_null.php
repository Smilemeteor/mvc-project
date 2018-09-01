<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background:rgb(250,251,250);">
	<center>
	<div style="width: 250px; height: 300px; background:url('https://b-ssl.duitang.com/uploads/item/201507/11/20150711000425_fRPAY.png')">
		<div style="float:left; margin-top:250px; margin-left:35px; font-size:20px; padding:15px;">
			<p><a href="/TestPractice/Mvc_Project/Table/Index/base_name/<?php echo $base_name; ?>" style="color:#000;"><b style="color:red;"><?php echo $table_name; ?></b>表为空,请<b style="color:blue;">返回</b></a></p>
			<p><a  href='/TestPractice/Mvc_Project/table/table_data_insert/base_name/<?php echo $base_name; ?>/table_name/<?php echo $table_name; ?>' style="color:#000;">添加数据</a></p>
		</div>
	</div>
	</center>
</body>
</html>