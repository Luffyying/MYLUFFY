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
				<a class='kind' href='user/archivedfile' style='margin-left: 535px'>归档&nbsp/</a>
				<a class='kind' href='user/letter'>私信&nbsp/</a>
				<a class='kind' href='user/rss'>RSS</a>
				<a class='go-back' href='user/user_index'>返回首页</a>
			</div>
			<div id="username">
				<?php echo $writer->username ;?>
			</div>
			
		</div>
		<div id='inform'>	
			<div id='note'>
			<h2>记录</h2>
			<ul>

		   <?php foreach($blogs as $blog){?>
				<li>&nbsp<a href='user/title?blogtitle=<?php echo $blog->title?>'><?php echo ($blog->title=='') ?'无标题': $blog->title?></a>(<?php echo explode(' ', $blog->day)[0]?>)</li>
				<?php }?>
			</ul>
			</div>
			<div id='tra'>
				<h2>旅行</h2>
				<ul>
					<li></li>
				</ul>
			</div>
			<div id='food'>
				<h2>美食</h2>
				<ul>
					<li></li>
				</ul>
			</div>
			<div id='pics'>
				<h2>图片</h2>
				<ul>
					<li></li>
				</ul>
			</div>
		</div>

	
		
	
	</body>
</html>

<!-- 	<div id='note'>
			<h2>记录</h2>
			<ul>
		   <?php foreach($blogs as $blog){?>
				<li><?php echo $blog->title?></li>
				<?php }?>
			</ul>
		</div>
		<div id='tra'>
			<h2>旅行</h2>
			<ul>
				<li></li>
			</ul>
		</div>
		<div id='food'>
			<h2>美食</h2>
			<ul>
				<li></li>
			</ul>
		</div>
		<div id='pics'>
			<h2>图片</h2>
			<ul>
				<li></li>
			</ul>
		</div> -->