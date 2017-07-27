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
<!-- banner轮播图 -->
<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active" style="background:#223240">
			<img src="/img/banner1.jpg" alt="第一张">
		</div>
		<div class="item" style="background:#F5E4DC;">
			<img src="/img/banner2.jpg" alt="第二张">
		</div>
		<div class="item" style="background:#DE2A2D;">
			<img src="/img/banner3.jpg" alt="第三张">
		</div>
<!-- 		<div style="background:#eee;">
			<img src="/img/slide.png" alt="第三张">
		</div> -->
	</div>
	<a href="#myCarousel" data-slide="prev" class="carousel-control left">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a href="#myCarousel" data-slide="next" class="carousel-control right">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>


<div class="tab1">
	<div class="container">
		<h2 class="tab-h2"><?php echo ($data["title"]); ?></h2>
		<p class="tab-p"><?php echo ($data["sign"]); ?></p>
		<div class="row">
			<div class="col-xs-6 col">
				<div class="media">
					<div class="media-left">
						<a href="#"><img src="/img/tab1-1.png" class="media-object" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">战略方向</h4>
						<p class="text-muted">其他：只卖产品，不提具体问题解决方案！</p>
						<p>我们：<?php echo ($data["direction"]); ?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col">
				<div class="media">
					<div class="media-left">
						<a href="#"><img src="/img/tab1-2.png" class="media-object" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">人才力量</h4>
						<p class="text-muted">其他：非欧美正牌大学毕业的、业界没有知名度的普通工程师！</p>
						<p>我们：<?php echo ($data["people"]); ?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col">
				<div class="media">
					<div class="media-left">
						<a href="#"><img src="/img/tab1-3.png" class="media-object" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">库存安排</h4>
						<p class="text-muted">其他：无法保证库存、没有时间表，无法准时发货！</p>
						<p>我们：<?php echo ($data["arrange"]); ?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col">
				<div class="media">
					<div class="media-left">
						<a href="#"><img src="/img/tab1-4.png" class="media-object" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">服务团队</h4>
						<p class="text-muted">其他：社会招聘的、服务水平参差不齐的普通员工！</p>
						<p>我们：<?php echo ($data["team"]); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="tab2">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 tab2-img">
				<img src="/img/tab3.png" class="auto img-responsive center-block" alt="">
			</div>
			<div class="text col-xs-6 col-sm-6 tab2-text">
				<h3>强大的物流网</h3>
				<p>遍布世界的储备仓库、发货及时、解决您的库存压力。</p>
			</div>
		</div>
	</div>
</div>


<div class="tab3">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6">
				<img src="/img/tab2.png" class="auto img-responsive center-block" alt="">
			</div>
			<div class="text col-xs-6 col-sm-6">
				<h3>强有力的技术支持保障</h3>
				<p>完全定制化服务，提供了强有力的技术支持保障。</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	//轮播自动播放
	$('#myCarousel').carousel({
		//自动4秒播放
		interval : 4000,
	});

	//设置文字垂直居中，谷歌浏览器加载图片的顺序问题，导致高度无法获取
	$(window).load(function () {
		$('.text').eq(0).css('margin-top', ($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
	});


	$(window).resize(function () {
		$('.text').eq(0).css('margin-top', ($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
	});

	$(window).load(function () {
		$('.text').eq(1).css('margin-top', ($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
	});

	$(window).resize(function () {
		$('.text').eq(1).css('margin-top', ($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
	});

</script>
<footer id="footer">
	<div class="container">

		<p>沪ICP备09046152号-8 . © 2009-2016 AMEYA360</p>
		<p class="" ><a href="<?php echo U('Admin/Index/index');?>">管理员页面</a></p>
	</div>
</footer>
</body>
</html>