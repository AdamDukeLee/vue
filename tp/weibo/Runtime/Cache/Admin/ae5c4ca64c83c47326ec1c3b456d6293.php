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
<link rel="stylesheet" type="text/css" href="/tp/Public/css/pagination.css" />
<nav class="navbar navbar-inverse navbar-static-top" >
	<div class="container">
		<div class="navbar-brand">案例管理</div>
		<form action="<?php echo U('examplemodify');?>" class="navbar-form navbar-right" method="post">
			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="服务的客户/概述" value="<?php echo ($search); ?>"/>
			</div>
			<input type="submit" class="btn btn-default" value="搜索" />
		</form>
	</div>
</nav>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo U('index');?>">后台首页</a></li>
		<li class="active">案例管理</li>
	</ol>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>编号</th>
				<th>服务的客户</th>
				<th>概述</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($arr["id"]); ?></td>
					<td><?php echo ($arr["title"]); ?></td>
					<td><?php echo ($arr["abstract"]); ?></td>
					<td>
						<a href="<?php echo U('examplechange');?>?id=<?php echo ($arr["id"]); ?>" class="btn btn-success">修改</a>
						<button class="btn btn-danger to" data-id="<?php echo ($arr["id"]); ?>">删除</button>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<?php if(empty($data)): ?><h2 class="text-center text-muted">(⊙o⊙)？没有数据</h2><?php endif; ?>
	<div class="text-center"><a class="btn btn-primary btn-lg" href="<?php echo U('exampleadd');?>"><span class="glyphicon glyphicon-plus"></span>新增案例</a></div>
	<div class="page text-right"><p>共<?php echo ($count); ?>条数据</p><?php echo ($pages); ?></div>
</div>

<div class="modal" id="deletemodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">提示</h4>
			</div>
			<div class="modal-body">
				你真的要删除此条案例吗???
			</div>
			<div class="modal-footer">
				<a href="" class="btn btn-danger who">确定删除</a>
			</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		$(".to").click(function(){
			var id=$(this).attr('data-id');
			var u="<?php echo U('exampledelete');?>?id="+id;
			$('.who').prop('href',u);
			$("#deletemodal").modal('show');


		})
	})
</script>

</body>
</html>