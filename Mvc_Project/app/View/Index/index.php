<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
</head>
<body>
<!-- <div id="container">
	<div hidden="hidden">
		<h1 id="h1" hidden="hidden"></h1>
		<h2 id="h2" hidden="hidden"></h2>
	</div> -->
	<div style="width:100%; height:150px; background:url(https://b-ssl.duitang.com/uploads/item/201807/23/20180723185639_VEJiC.png); float:left;"></div>
	<div style="width:100%; height:800px; float: left; background:url(https://b-ssl.duitang.com/uploads/item/201807/23/20180723165719_G3X8c.jpeg);">
	<div class="container" style="height:800px;">
	
	<!-- 头部导航 -->
	<div style="float:left;" class="container">
		<?php include "./public/html/top.php" ?>
	</div>

	<!-- 右侧用户信息 -->
	<div style="height:150px; background:rgb(52,132,98); float:right; width:370px;">
	此处操作展示
	</div>
	
	<!-- 主体部分 -->
	<div style="background:rgb(169,198,180); height:410px; padding:5px;" class="col-md-8">
		<iframe name="menuFrame" src="/TestPractice/Mvc_Project/Base/Index" style="overflow:visible; padding:5px; border:3px solid pink" scrolling="yes" frameborder="no" width="100%" height="100%;">
		</iframe>
	</div>

	<!-- 底部宣传栏 -->
	<div style="background:rgb(226,200,190); height: 30px; margin-top:250px; line-height: 30px; font-size:25px; text-align:center; border-radius:20px;" class="col-md-8">==> 收藏！评论！点赞！<==</div>
	</div>
	<?php include "./public/html/bottom.php" ?>
</div>
</body>
</html>