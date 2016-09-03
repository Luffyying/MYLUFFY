<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog Study</title>
	<base href="<?php echo site_url();?>"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stu.css">
</head>
<body>
	<div id="header">
		<div id="nav">
				<a id='log' href="#">LUFFY</a>
				<ul id="kind">
					<li style='margin-left: 400px'><a href='user/index'>首页</a></li>
					<li><a href='user/stu'>记录</a></li>
					<li><a href='user/tra'>游行</a></li>
					<li><a href='user/mus'>音乐</a></li>
					<li><a href='user/food'>美食</a></li>
				</ul>
				<div id="search-con"></div>
				<div id="search">
					<img src="imgs/serbut.jpg" alt="">
				</div>	
				

	    </div>
	</div>
	<div id="content">
		<div id="able">
			<ul>
				<li class="userblock"><a href="" title=""><img class='hov' src="imgs/upload2.jpg" alt=""></a></li>
				<li class="conblock"><a href="" title=""><img class='hov' src="imgs/a1.jpg" alt=""><img class='init' src="imgs/w1.jpg" alt=""></a></li>
				<li class="conblock"><a href="" title=""><img class='hov' src="imgs/a2.jpg" alt=""><img class='init' src="imgs/w2.jpg" alt=""></a></li>
				<li class="conblock"><a href="" title=""><img class='hov' src="imgs/a4.jpg" alt=""><img class='init' src="imgs/w3.jpg" alt=""></a></li>
				<li class="conblock" style='border-right: 0px'><a href="" title=""><img src="imgs/a3.jpg" class='hov' alt=""><a href="" title=""><img class='init'  src="imgs/w4.jpg" alt=""></a></li>
			</ul>
		</div>
		<div id="manger">
			<ul>
				<li class="userinf">
				<a herf=''>luffyying</a>
				</li>
				<div id="exit"></div>
				<img class='down' src="imgs/27.jpg" alt="">
				<li class="mgr"><a herf=''>文章</a></li>
				<li class="mgr"><a herf=''>获赞</a></li>
				<li class="mgr"><a herf=''>评论</a></li>
				<li class="mgr"><a herf=''>通知</a></li>
				<li  class="mgr" style='border-bottom: 0'><a herf=''>私信</a></li>
			</ul>
		</div>
		<div id="note"> 
			<div id="por">
				<img src="imgs/portrait.gif" alt="">
			</div>
			<div id="note-con">
				
			</div>
		</div>
		<div id="footer">
		<hr align='center' style="border:2 solid #000"  width="100%" size=1/><br/>
		<span class="mycopy">&copy&nbspLuffyying2016</span>
		
	</div>
	</div>
	
	<script src='js/jquery-1.12.2.js'></script>
	<script>
		$(function(){

			//the hover for pictures
			$li = $('.conblock .init').mouseover(function(){
				$(this).addClass('selected');
			})
			$li = $('.conblock .init').mouseout(function(){
				$(this).addClass('selected2');
			})
			$li = $('.mgr').hover(function(){
				$(this).addClass('select');
			},function(){
				$(this).removeClass('select');
			});

			//the function of search

		    var flag = true;
			$('#search img').click(function(){
			if(flag){
				var timer = setInterval(function(){
					if(parseInt($('#search-con').css('width')) ==170){
				    	clearInterval(timer);
				    }else{
				    	$('#search-con').css('width',parseInt($('#search-con').css('width'))+5+'px')
				    }
				    },10);

			}else{
				var timer = setInterval(function(){
					if(parseInt($('#search-con').css('width')) == 0){
				    	clearInterval(timer);
				    }else{
				    	$('#search-con').css('width',parseInt($('#search-con').css('width'))-5+'px')
				    }
				    },10);
			}
			flag = !flag;  
			});

			//the function of exit
			$('.down').click(function(){
				if(parseInt($('#exit').css('height'))==0)
					$('#exit').animate({height:['62px','swing']},700,function(){
						$('#exit').html("<a href='#'>退出</a>");
					});
			    else{
			    	$('#exit').animate({height:['0px','swing']},700,function(){
			    		$('#exit').html('');
			    	});
			    }
			});
		})
	</script>
</body>
</html>