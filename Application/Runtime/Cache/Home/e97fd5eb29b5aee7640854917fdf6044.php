<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/reg.css">
</head>
<body>
	<form action="<?php echo U('Home/User/doReg');?>" method="post">
	<nav class="nav">
		<a class="return" href="<?php echo U('Home/User/login');?>"></a>
		<span>账号注册</span>
	</nav>
	<div class="reg-list">
		<div class="ipt ph-num">
			<input type="text" placeholder="请输入手机号" name="name">
		</div>
		<div class="ipt password">
			<input type="password" placeholder="6-20位数字、字母、_组合" name="password">
		</div>
		<div class="code">
			<div class="ipt pic-code">
				<input type="text" placeholder="请输入图片码" name="verify">
			</div>
			<a class="pic" href="javascript:void(0)">
				<img src="<?php echo U('Home/index/verifycode');?>" class="verify">
			</a>
		</div>
		<input class="reg-btn" type="submit" name="" value="注册">
		</form>
		<a class="agreement" href="javascript:void(0)">我已阅读并同意<span>《优信二手车用户协议》</span></a>
<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('.verify').click(function() {
			newsrc = "/Home/Index/verifycode/v/"+Math.random();
			$('.verify').attr('src',newsrc);			
		});		
	});
</script>
</body>
</html>