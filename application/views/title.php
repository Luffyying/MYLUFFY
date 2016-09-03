<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<base href="<?php echo site_url();?>"/>
		<link rel="stylesheet" type="text/css" href="css/archived.css">
		
	</head>
	<body>
		<div id="content">
			<div id='nav'>
				<a class='kind' href='archivedfile' style='margin-left: 535px'>归档&nbsp/</a>
				<a class='kind' href='#'>私信&nbsp/</a>
				<a class='kind' href='#'>RSS</a>
				<a class='go-back' href='user/user_index'>返回首页</a>
			</div>
			<div id="username">
				<?php echo $writer;?>
			</div>
			<div id='inform'>
			<span><?php echo $blog->title;?></span><br><br>
			<span><?php echo $blog->day;?></span><br><br><hr style='width: 800px'><br><br>
				<p><?php echo $blog->content;?></p>
			</div>
			
		</div>
	</body>
</html>