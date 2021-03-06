<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>汽车品牌分类</title>
	<style type="text/css">
	h1 { text-align:center;}
	table { margin:0 auto;}
	td { width: 100px;text-align:center;}
	body { width: 1000px;text-align:center;}
	form { margin: 0 auto;width: 100px;}

	</style>
</head>
<body>
<h1>汽车品牌分类</h1>
	<table border="1px;" cellpadding="0" cellspacing="0">
		<tr>
			<td>ID</td>
			<td>汽车品牌</td>
			<td>PID</td>
			<td>图片</td>
			<td>状态</td>
			<td>操作</td>			
		</tr>
		<?php foreach ($data as $key => $value) { ?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['parent_id']; ?></td>
				<td><img src="/Uploads/<?php echo $value['image']; ?>" width="30" height="30" alt="no pic"></td>
				<td><?php echo $value['status']; ?></td>
				<td><?php if($value['status'] == 0) { ?>
							<a href="<?php echo U('Admin/Classify/onLine',array('id'=>$value['id']));?>">上线</a>
					<?php } else if($value['status'] == 1) { ?>
							<a href="<?php echo U('Admin/Classify/offLine',array('id'=>$value['id']));?>">下线</a>
					<?php } ?>
					<a href="<?php echo U('Admin/Classify/edit',array('id'=>$value['id']));?>">编辑</a> 
				</td>
			</tr>
		<?php } ?>
	</table>
	<a href="<?php echo U('Admin/Classify/add');?>">添加分类</a>
</body>
</html>