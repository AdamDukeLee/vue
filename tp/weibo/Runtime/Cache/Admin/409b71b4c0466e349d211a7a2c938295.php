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
<div class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target="#navbar_collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo ($user["user"]); ?></div>
			<p class="navbar-text">
				<a href="<?php echo U('quit');?>" class="navbar-link">退出</a>&nbsp;&nbsp;
				<a href="<?php echo U('Resetpassword/index');?>" class="navbar-link">改密码</a>
			</p>
		</div>
		<div class="collapse navbar-collapse" id="navbar_collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">前往<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo U('Home/Index/index');?>" target="_blank">网站首页</a></li>
						<li><a href="<?php echo U('Home/Product/index');?>" target="_blank">网站产品</a></li>
						<li><a href="<?php echo U('Home/About/index');?>" target="_blank">网站关于我们</a></li>
						<li><a href="<?php echo U('Home/Case/index');?>" target="_blank">网站案例</a></li>
					</ul>

				</li>
			</ul>
		</div>
	</div>
</div>
<div class="center-block" style="width:560px">
	<!--   首页功能 -->
	<div class="panel-group text-center" id="functions">
		<div class="panel panel-default">
			<div class="panel-heading" data-toggle="collapse" data-target="#collapseone" data-parent="#functions" style="cursor:pointer">
				<h3 class="panel-title">公司信息</h3>
			</div>
			<div class="panel-body panel-collapse collapse" id="collapseone">
				<a href="<?php echo U('introduceindex');?>" class="btn btn-default">名称+个性签名</a>
				<a href="<?php echo U('introduce');?>" class="btn btn-default">公司简介</a>
				<a href="<?php echo U('address');?>" class="btn btn-default">联系方式</a>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" data-toggle="collapse" data-target="#collapsetwo" data-parent="#functions" style="cursor:pointer">
				<h3 class="panel-title">案例</h3>
			</div>
			<div class="panel-body panel-collapse collapse" id="collapsetwo">
				<a href="<?php echo U('exampleadd');?>" class="btn btn-default ">新增</a>
				<a href="<?php echo U('examplemodify');?>" class="btn btn-default ">管理</a>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" data-toggle="collapse" data-target="#collapsethree" data-parent="#functions">
				<h3 class="panel-title">产品</h3>
			</div>
			<div class="panel-body collapse panel-collapse" id="collapsethree">
				<a href="<?php echo U('productadd');?>" class="btn btn-default">增加</a>
				<a href="<?php echo U('productmodify');?>" class="btn btn-default">管理</a>
			</div>
		</div>
	</div>
</div>

















</body>
</html>