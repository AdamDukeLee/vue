<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title><?php echo ((isset($title) && ($title !== ""))?($title):"标题"); ?></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="shortcut icon" href="/tp/public/img/logoxxx.ico" />
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<style>
		.navbar-nav.nav>li:nth-of-type(<?php echo ($active); ?>){
		    color: #555;
		    background-color: #e7e7e7;
		}
	</style>
</head>
<body>
<!-- 导航条 -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="index.html" class="navbar-brand"><img src="/img/logo.png" alt="" height="30px"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
				<li><a href="<?php echo U('Product/index');?>"><span class="glyphicon glyphicon-list"></span> 产品</a></li>
				<li><a href="<?php echo U('Case/index');?>"><span class="glyphicon glyphicon-fire"></span> 案例</a></li>
				<li><a href="<?php echo U('About/index');?>"><span class="glyphicon glyphicon-question-sign"></span> 关于</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="jumbotron">
	<div class="container">
		<hgroup>
			<h1>案例</h1>
			<h4>和各大明星企业有着紧密合作...</h4>
		</hgroup>
	</div>
</div>
<div id="case">
	<div class="container">
		<div class="row">
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="thumbnail">
						<img src="/tp/uploads/<?php echo ($arr["img"]); ?>" alt="">
						<div class="caption">
							<h4><?php echo ($arr["title"]); ?></h4>
							<p><?php echo ($arr["abstract"]); ?></p>
						</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>
<footer id="footer">
	<div class="container">

		<p>沪ICP备09046152号-8 . © 2009-2016 AMEYA360</p>
		<p class="" ><a href="<?php echo U('Admin/Index/index');?>">管理员页面</a></p>
	</div>
</footer>
</body>
</html>