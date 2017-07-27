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
<h2 class="text-center">网站后台管理登陆页面</h2>
<div style="width:400px;padding:32px 24px;background:#eee;border-radius:8px;" class="center-block">
	<form action="<?php echo U('index');?>" method="post" autocomplete="off">
		<input style="display:none">
		<div class="form-group">
			<label>用户名：</label>
			<input type="text" class="form-control" name="username" placeholder="用户名称"/>
			<input style="display:none">
		</div>
		<div class="form-group">
			<label>密码：</label>
			<input type="password" class="form-control" name="password"/>
		</div>
		<div class="form-group">
			<label>输入图形验证码：</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" name="code" placeholder="输入4位数字"/>
				</div>
				<div class="col-xs-6 text-right">
					<img src="<?php echo U('Login/verify');?>?id=" alt="" height="36" onclick="this.src=this.src+1"/>
					<span class="text-info help-block">点击图片可以刷新验证码</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" value="登陆" class="btn btn-success btn-lg"/>
		</div>
	</form>
</div>

</body>
</html>