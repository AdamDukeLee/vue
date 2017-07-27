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
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo U('index');?>">后台首页</a></li>
		<li><a href="<?php echo U('productmodify');?>">产品管理</a></li>
		<li class="active">修改产品信息</li>
	</ol>
	<div class="well center-block" style="width:700px">
		<h3 class="text-center">修改产品信息</h3>
		<form action="<?php echo U('productchange');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-xs-3">产品：</label>
				<div class="col-xs-8">
					  <input type="text" class="form-control" name="title" value="<?php echo ($data["title"]); ?>"/>
					  <input type="hidden" value="<?php echo ($data["id"]); ?>" name="id" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">简单介绍：</label>
				<div class="col-xs-8">
					<textarea name="abstract" class="form-control"><?php echo ($data["abstract"]); ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">选择标题图片：</label>
				<div class="col-xs-8">
					<img src="/tp/uploads/<?php echo ($data["img"]); ?>" alt="" class="havep img-responsive center-block hidden img-thumbnail"/>
					<label style="margin-top:10px;" class="btn btn-default"><span class="addlabel">修改图片</span><input type="file" class="getpicture hidden" name="upload"/></label>
				</div>
			</div>
			<div class="form-group">
				<hr />
				<div class="col-xs-11 text-right">
					<input type="submit" class="btn btn-danger"/>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
	if(typeof FileReader != 'undefined'){
		$('.havep').removeClass('hidden');
		$('.getpicture').change(function(){
			var file=this.files[0];
			console.log(file);
			if(file.type.match('image')){
				var reader=new FileReader();
				reader.readAsDataURL(file);
				reader.onload=function(){
					$('.havep').prop('src',this.result);
					$('.addlabel').text('重新选择图片');
				}
			}else{
				alert('您选择的不是图片');
			}
		})
	}else{
		$(".getpicture").removeClass('hidden')
	}

})

</script>

</body>
</html>