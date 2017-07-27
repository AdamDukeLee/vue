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
		<li class="active">增加案例</li>
	</ol>
	<div class="well center-block" style="width:700px">
		<h3 class="text-center">增加以往案例</h3>
		<form action="<?php echo U('exampleadd');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-xs-3">服务的客户：</label>
				<div class="col-xs-8">
					  <input type="text" class="form-control" name="title"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">简单介绍：</label>
				<div class="col-xs-8">
					<textarea name="abstract" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">选择标题图片：</label>
				<div class="col-xs-8">
					<img src="" alt="" class="havep img-responsive center-block hidden img-thumbnail"/>
					<label style="margin-top:10px;" class="btn btn-default"><span class="addlabel">添加图片</span><input type="file" class="getpicture hidden" name="upload"/></label>
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
		$('.getpicture').change(function(){
			var file=this.files[0];
			console.log(file);
			if(file.type.match('image')){
				var reader=new FileReader();
				reader.readAsDataURL(file);
				reader.onload=function(){
					$('.havep').removeClass('hidden').prop('src',this.result);
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