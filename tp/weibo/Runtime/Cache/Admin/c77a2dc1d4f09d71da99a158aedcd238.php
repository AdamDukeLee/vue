<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title><?php echo ((isset($title) && ($title !== ""))?($title):"标题"); ?></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<link rel="shortcut icon" href="/tp/public/img/logoxxx.ico" />
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container text-center">
	<br /><br /><br /><br />
	<h1>(⊙o⊙)？ 您没有权限访问此页面</h1><br /><br />
	<p>
		<a href="<?php echo U('Login/index');?>" class="btn btn-warning btn-lg">管理员账号</a>
		&nbsp;&nbsp;&nbsp;
		<a href="<?php echo U('Home/Index/index');?>" class="btn btn-default btn-lg">网站首页</a>
	</p>
</div>

</body>
</html>