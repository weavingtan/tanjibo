<?php
  use yii\helpers\Url;
 ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>smister后台登录</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			resizeScreen();
		});

		$(window).resize(function(){
			resizeScreen();
		});

		function resizeScreen(){
			var contentHeight = $(document).height() - 100;
			var contentWidth = $(document).width() - 250;
			$("#menu").height(contentHeight);
			$("#content-right").css({height : contentHeight , width :contentWidth });
		}

	</script>
	<link rel="stylesheet" type="text/css" href="css/iframe.css"/>
</head>
<body>
<header id="header">
	<h1 class="header-box">Smister后台管理</h1>
	<div class="header-right header-box">
		<span>您好，admin</span> | <a href="#">浏览网站</a> | <a href="#">安全退出</a>
	</div>
</header>
<div id="content">
	<ul id="menu">
		<li><a href="#"><span class="icon icon-home"></span>首页</a></li>
		<li><a href="#"><span class="icon icon-person"></span>个人中心</a></li>
		<li>
			<a href="#"><span class="icon icon-message"></span>前台设置</a>
		</li>
		<li>
			<a href="#"><span class="icon icon-start"></span>内容管理</a>
			<ul>
				<li><a href="main.html" target="main">主页页面</a></li>
				<li><a href="<?=Url::to(['user/index'])?>" target="main">列表页面</a></li>
				<li><a href="<?=Url::to(['user/add'])?>" target="main">表单页面</a></li>
			</ul>
		</li>
		<li>
			<a href="#"><span class="icon icon-setting"></span>系统设置</a>
			<ul>
				<li><a href="<?php echo Url::to(['user/index']);?>" target='main'>用户管理</a></li>
				<li><a href="#">文章设置</a></li>
				<li><a href="#">文章设置</a></li>
			</ul>
		</li>
	</ul>
	<div id="content-right">
       <iframe name="main" style="width:100%;height:100%;" frameborder="0" src="<?php echo Url::to(['index/main']);?>"></iframe>
	</div>
</div>
</body>
</html>
