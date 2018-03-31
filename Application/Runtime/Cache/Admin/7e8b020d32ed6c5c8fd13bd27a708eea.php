<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	form { margin: 0 auto;width: 100px;}

	</style>
</head>
<body>
<form action="<?php echo U('Admin/Classify/doAdd');?>" method="post" enctype="multipart/form-data">
	<select name="parent_id" >
		<option value="0">顶级分类</option>
		<?php foreach ($classify as $value) { ?>
		<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
		<?php } ?>	
	</select>
	<br>
	<input type="text" name="name"><br>
	<input type="file" name="image"><br>
	<input type="submit" name="" value="添加">
	<a href="<?php echo U('Admin/Classify/lists');?>">返回</a>
</form>
	
</body>
</html>