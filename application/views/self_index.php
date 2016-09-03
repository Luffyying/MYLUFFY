<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url();?>"/>
	<link rel="stylesheet" type="text/css" href="css/self_index.css">
	
</head>
<body>
	<div id="content">
		<div id='nav'>
			<a class='kind' href='user/archivedfile' style='margin-left: 535px'>归档&nbsp/</a>
			<a class='kind' href='user/letter'>私信&nbsp/</a>
			<a class='kind' href='user/rss'>RSS</a>
			<a class='go-back' href='user/user_index'>返回首页</a>
		</div>
		<div id="username">
			<?php echo $writer->username ;?>
		</div>
		<div id='all'>
			<ul id='block'>
			<?php foreach($yourblogs as $blog){?>
				<li class="list">
					<div class="time"><?php echo $blog->day?></div>
					<h2 class='title'><?php echo $blog->title?></h2>
					<p class='p'><?php echo $blog->content?></p>
					
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>