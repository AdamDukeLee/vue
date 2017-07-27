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
	<script type="text/javascript">
		window.UEDITOR_HOME_URL = "/tp/ThinkPHP/Public/Ueditor/";    //UEDITOR_HOME_URL、config、all这三个顺序不能改变(绝对路径)
	</script>
	<script type="text/javascript" src="/tp/ThinkPHP/Public/Ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/tp/ThinkPHP/Public/Ueditor/ueditor.all.min.js"></script>


</head>
<body>

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo U('index');?>">后台首页</a></li>
			<li class="active">编辑公司简介</li>
		</ol>

		<div class="well">
			<h3 class="text-center">编辑公司简介</h3>
			<form name='MyForm' id='MyForm' method='POST' action="<?php echo U('introduce_write');?>">
				<script type="text/plain" id="content" name="content"></script>
				<h2 class="text-right"><input type="button" value="保存"  class="submit btn btn-success btn-lg"/></h2>
			</form>
		 </div>
	</div>
<script type="text/javascript">
$(function(){
    var editor;
        //具体参数配置在  editor_config.js  中
    var options = {
        initialFrameWidth:'100%',        //初化宽度
        initialFrameHeight:300,        //初化高度
        focus:false,                  //初始化时，是否让编辑器获得焦点true或false
        maximumWords:1000,        //允许的最大字符数
        elementPathEnabled:false,//隐藏元素路径
    };
    editor = new UE.ui.Editor(options);
    editor.render("content");
    editor.ready(function(){
        editor.setContent('<?php echo ($vo["content"]); ?>');     //加载数据库Action.class.PHP传过来的值
    });

	 function BeForeForm(formName){
		    if(editor.hasContents()){
		        editor.sync();       //同步内容
		        $("form[name='MyForm']").submit();   //提交表单判断！
		    }
		 }

	 $(".submit").click(function(){
		 BeForeForm();
	 });
 });
</script>
</body>
</html>



<!-- 用于这贴 -->