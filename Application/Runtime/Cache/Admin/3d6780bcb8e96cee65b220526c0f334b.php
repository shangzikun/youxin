<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('Admin/Classify/doEdit');?>" method="post" enctype="multipart/form-data" >
	<select name="parent_id" >
		<option value="0">顶级分类</option>
		<?php foreach ($classify as $value) { ?>
			<option value="<?php echo $value['id']?>" <?php if ($value['id'] == $data['parent_id']) { ?>
				selected="selected"
			<?php } ?>><?php echo $value['name']; ?></option>
			<?php echo $value['name']?>
		<?php } ?>
	</select>
	<input type="text" name="name" value="<?php echo $data['name']?>"><br>
	<input type="file" name="image"><br>
	<input type="hidden" name="id" value="<?php echo $data['id']?>">
	<br>
	<input type="submit" name="">
	</form>
</body>
</html>