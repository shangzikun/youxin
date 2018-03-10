<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>优信</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/userInfo.css">
</head>
<body>
	<div class="info-head">
		<a href="javascript:void(0)" class="uxin-app">APP</a>
		<a href="<?php echo U('Home/index/index');?>" class="uxin-logo"></a>
		<a href="<?php echo U('Home/User/login');?>" class="uxin-head">
			<img src="/Public/Home/image/head.png">
		</a>
		<?php if(isset($_SESSION['me']['id'])) { ?>
		<span class="txt"><?php echo $_SESSION['me']['name'] ?></span>
		<?php } else { ?> <span class="txt">点击头像登录</span>
		<?php } ?>
		
	</div> 
	<div class="wrap">
		<a class="collection" href="javascript:void(0)">我的收藏</a>
		<a class="record" href="javascript:void(0)">我的浏览记录</a>
	</div>
</body>
</html>