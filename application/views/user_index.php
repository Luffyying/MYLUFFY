<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog Study></title>
	<base href="<?php echo site_url();?>"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/cover.css">
	<link rel="stylesheet" type="text/css" href="css/user_index.css">
</head>
<body>
<div id='upload-pic'>
    <form action="user/user_index" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	添加一张照片：<input type='file' id='file' name='myfile'>
	<input type='submit' name='sub'>
	<!-- <button id='ti'>提交</button> -->

	</form>
	<button id='unsub'>取消</button>
</div>
<div id="cover">
	<table id="publish">
		<tbody>
			<tr>
				<td style='color:#fff'>标题&nbsp&nbsp&nbsp</td>
				<td><input class='mytitle' type="text" name='title' style='width: 400px;height: 30px;font-size:17px'></input></td><br/><br/>
			</tr>
			<tr>
				<td style='color:#fff'>内容&nbsp&nbsp&nbsp&nbsp</td>
				<td>
					<textarea id='content_1' name="content_1"
					style='width:500px;height: 300px'></textarea>
				</td>
			</tr>
			 <tr id='selection'>
				<td><span style='margin-left:100px' id='undo'>取消</span></td>
				<td><span id='submit'>提交</span></td>
			</tr> 
		</tbody>
	</table>
</div>
	<div id="header">
		<div id="nav">
				<a id='log' href="#">LUFFY</a>
				<ul id="kind">
					<li style='margin-left: 400px'><a href='user/user_index'>首页</a></li>
					<li><a href='user/stu'>记录</a></li>
					<li><a href='user/tra'>旅行</a></li>
					<li><a href='user/mus'>图片</a></li>
					<li><a href='user/food'>美食</a></li>
				</ul>
				<div id="search-con"></div>
				<input class='sear' type='text' name='search-context' value='&nbsp&nbsp搜索'></input>
				<div id="search">
					<img src="imgs/serbut.jpg" alt="">
				</div>	
	    </div>
	</div>
	<div id="content">
		<div id="able">
			<ul>
			    <?php if($pic=='0'){
			     $pic = 'imgs/upload2.jpg';}
			    ?>
				<li class="userblock"><a href=''><img class='hov' src='imgs/<?php echo $pic?>' alt=""></a></li>
				<li id='mnote' class="conblock"><img class='hov' src="imgs/a1.jpg" alt=""><img class='init' src="imgs/w1.jpg" alt=""></li>
				<li class="conblock"><img class='hov' src="imgs/a2.jpg" alt=""><img class='init' src="imgs/w2.jpg" alt=""></li>
				<li class="conblock"><img class='hov' src="imgs/a4.jpg" alt=""><img class='init' src="imgs/w3.jpg" alt=""></li>
				<li class="conblock" style='border-right: 0px'><img src="imgs/a3.jpg" class='hov' alt=""><img class='init'  src="imgs/w4.jpg" alt=""></li>
			</ul>
		</div>
		<div id="manger">
			<ul>
				<li class="userinf mgr">
				<a href="user/self_index?writer=<?php echo $this->session->userdata('login_user')->user_id;?>"><?php echo $this->session->userdata('login_user')->username;?></a>
				</li>
				<div id="exit"></div>
				<img class='down' src="imgs/27.jpg" alt="">
				<li class="mgr"><a href='blog/mytitles'>文章(<?php echo $this->session->userdata('login_user')->title_num;  ?>)</a></li>
				<li class="mgr"><a href=''>喜欢(<?php echo $this->session->userdata('login_user')->love_num; ?>)</a></li>
				<li class="mgr"><a href=''>关注(<?php echo $this->session->userdata('login_user')->comment_num; ?>)</a></li>
				<li class="mgr"><a href=''>通知(<?php echo $this->session->userdata('login_user')->infor_num; ?>)</a></li>
				<li  class="mgr" style='border-bottom: 0'><a href=''>私信(<?php echo $this->session->userdata('login_user')->message_num; ?>)</a></li>
			</ul>
		</div>
		<div id='note'>
			<div id='attention'>关注成功</div>
			<ul id='blogs' class='blog-block'>
			<?php foreach($blogs as $blog){?>
				<li class='firstli'>
					<p class='displayid'><?php echo $blog->blog_id?></p>
					<div class='mypor'>
						<span style='font-size: 20px'><?php echo $blog->blogwriter ?></span>
						<button class='focus'>+关注</button>
					</div>
				    <a class='por' href="user/self_index?writer=<?php echo $blog->blogwriter ?>"><img class='ss' src="imgs/<?php echo $blog->blogportrait?>" alt="your"></a>
				    
					<div class='note-con'>
						<h2><?php echo $blog->title ;?></h2><br/><br/>
						<?php $str = $blog->content ?>
						<p class='mywords'><?php echo mb_substr($str,0,10,"utf-8");?></p>
						<p class='add'><?php echo $str;?></p>
						<div class='hid-comment'>
							<textarea id="postContent" class="content"></textarea>
							<button class='btn'>OK</button>
						</div>	
						  	
					</div>
					<div id='user-infors'>
							<span class='more'>展开</span>
							<span class='com'>评论</span>&nbsp&nbsp
							<span class='heart'><img src="imgs/h3.jpg" alt=""></span>
							<span class='num'><?php echo $blog->clickrate ;?></span>&nbsp&nbsp
							<span><?php echo $blog->day ;?></span>&nbsp&nbsp
					</div>						
				</li>
				<?php }?>
			</ul>
		</div>	
	<!-- 	<div id="footer">
		<hr align='center' style="border:2 solid #000"  width="100%" size=1/><br/>
		<span class="mycopy">&copy&nbspLuffyying2016</span>
		</div> -->
	</div>
	<script type='text/javascript' src='kindeditor/kindeditor-min.js' charset='utf-8'></script>
	<script src='js/jquery-1.12.2.js'></script>
	<script>
		KE.show({
			id:'content_1'
		});
	</script>
	<script>
		$(function(){

			//publish
			$('#ti').on('click',function(){
				var n= $("#file");
                 console.log(n.value);
				//$.post('user/uploadpic',{name:n},function(){},'text');
			});
			$('#submit').on('click',function(){
				var s = KE.util.getData("content_1");
				$.post('publish/pub_index',{
					title:$('.mytitle').val(),
					contents:s},function(res){
					if(res=='success'){
						alert('提交成功');
						location.reload();//redraw
					}else{
						alert('提交失败，请重试')
					}
				},'text');
			});
			//undo the publish
			$('#undo').on('click',function(){
				$('#cover').css('display','none');
			});
			//publish the title
			$('#mnote').on('click',function(){
				$('#cover').css('display','block').css('height',$(document).height()+'px');
			});
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
					if(parseInt($('#search-con').css('width')) ==250){
				    	clearInterval(timer);
				    	$('.sear').css('display','block');
				    }else{
				    	$('#search-con').css('width',parseInt($('#search-con').css('width'))+5+'px')
				    }
				    },10);
				

			}else{
				var timer = setInterval(function(){
					$('.sear').css('display','none');
					if(parseInt($('#search-con').css('width')) == 0){
				    	clearInterval(timer);
				    	
				    }else{
				    	$('#search-con').css('width',parseInt($('#search-con').css('width'))-5+'px')
				    }
				    },10);


			}
			
			flag = !flag;  
			});

			$('.sear').on('focus',function(){
				if($(this).val()==this.defaultValue){
					$(this).val('');
				}
			});
			$('.sear').on('blur',function(){
				  $(this).val(this.value ==''?this.defaultValue:this.value);
			});
			//the function of exit
			$('.down').click(function(){
				if(parseInt($('#exit').css('height'))==0)
					$('#exit').animate({height:['62px','swing']},700,function(){
						$('#exit').html("<a href='user/logout'>退出</a>");
					});
			    else{
			    	$('#exit').animate({height:['0px','swing']},700,function(){
			    		$('#exit').html('');
			    	});
			    }
			});

			//fold the content
			$('.more').each(function(){
				$(this).attr('flag','false');
			});

			$('.more').on('click',function(){
				if($(this).parents('.firstli').children('.note-con').children('.hid-comment').css('display')=='block'){
					$h= 230;
				}else{
					$h= 130;
				}
				if(($(this).attr('flag'))=='false'){//fold
				$(this).parents('.firstli').children('.note-con').children('.mywords').css('display','none');
				$(this).parents('.firstli').children('.note-con').children('.add').css('display','block');
				$(this).parents('.firstli').css('height',parseInt($(this).parents('.firstli').children('.note-con').children('.add').css('height'))+$h+'px');
				$(this).text('收起');
				$('#content').css('height','1730px');
				}else{//unfold
				$(this).parents('.firstli').children('.note-con').children('.mywords').css('display','block');
				$(this).parents('.firstli').children('.note-con').children('.add').css('display','none');
				$(this).parents('.firstli').css('height',parseInt($(this).parents('.firstli').children('.note-con').children('.mywords').css('height'))+$h+'px');
				$(this).text('展开');
				$('#content').css('height','1500px');
				}
				if(($(this).attr('flag'))=='false'){
					$(this).attr('flag','true');
				}
				else{
					$(this).attr('flag','false');
				}
			
				
			})

			//love the message~~~~~~~~~~~~~~~~~~~~~

			$('.heart').each(function(){
				$(this).attr('flag','false');
			});

			$('.heart').on('click',function(){
				if(($(this).attr('flag'))=='false'){//like
				$(this).children().attr('src','imgs/h2.jpg');
				$(this).next('span').text((Number($(this).next('span').text())+1));

				//
				}else{//undo
					$(this).children().attr('src','imgs/h3.jpg');
					$(this).next('span').text((Number($(this).next('span').text())-1));
				}
				if(($(this).attr('flag'))=='false'){
					$(this).attr('flag','true');
					$flag = 1;
				}
				else{
					$(this).attr('flag','false');
					$flag = 0;
				}
				//write to the database
				$blog_id = $(this).parents('.firstli').children('.displayid').text();
				//$title = $(this).parents('.note-con').children('h2').text();
					$.post('blog/likeMessage',{blog_id:$blog_id,flag:$flag},function(res){
						if(res=='fail'){
							alert('点评喜欢失败');
						}else{
							alert('点评成功');
							//location.reload();
						}
					},'text');
			})

			

			//the function of comment
			$('.com').each(function(){
				$(this).attr('flag','false');
			});
			$('.com').on('click',function(){
				// if($(this).parents('.firstli').children('.note-con').children('.mywords').css('display')=='block'){//unfold
				// 	$hei= 160;
				// }else{//fold
				// 	$hei= 130;
				// }
				if(($(this).attr('flag'))=='false'){//fold
					$(this).parents('.firstli').children('.note-con').children('.hid-comment').css('display','block').css('top',160+$(this).parents('.firstli').children('.note-con').children('.add').css('height')+'px');
					$(this).parents('.firstli').css('height',parseInt($(this).parents('.firstli').css('height'))+100+'px');
				}else{
					$(this).parents('.firstli').children('.note-con').children('.hid-comment').css('display','none').css('top','160px');
					$(this).parents('.firstli').css('height',parseInt($(this).parents('.firstli').css('height'))-100+'px');

				}
				if(($(this).attr('flag'))=='false'){
					$(this).attr('flag','true');
				}
				else{
					$(this).attr('flag','false');
				}
			
				
			})
			//submit the comment  by ajax
			$('.btn').each(function(){
				$(this).on('click',function(){
					$.post('comment/post',{blogId:$(this).parents('.firstli').children('.displayid').text(),
					content:$(this).prev().val()},function(res){
						alert(res);
					if(res=='fail'){
        				alert('评论失败');
        			}else if(res=='success'){
        				alert('评论成功');
        				location.reload();//redraw
        			}
				},'text');
				});
				
			})
			//upload the portrait--------------待续
			$('.userblock').on('click',function(){
				$('#upload-pic').css('display','block');
			});
			$('#unsub').on('click',function(){
				$('#upload-pic').css('display','none');
			})
          
			//look the information of the portrait
			// $('.por').each(function(){
			// 	$(this).attr('flag','false');
			// });
			$('.por').on('mouseover',function(){
				//console.log('haha');
				$(this).prev().css('display','block');
				//$("<div style='background:red'></div>").appendTo($('body'));
			}).on('mouseout',function(){  //have a problem

				$(this).prev().on('mouseenter',function(){

				}).on('mouseleave',function(){
						$(this).prev().css('display','none');
				}.bind(this));
				// setTimeout(function(){
				// 	$(this).prev().css('display','none');
				// }.bind(this),5000);
				// if(($(this).attr('flag'))=='false'){
				// 	$(this).attr('flag','true');
				// }
				// else{
				// 	$(this).attr('flag','false');
				// }
				
			});
			//add the attention
			$('.focus').on('click',function(){
				// setTimeout(function(){
				// 	 $('#attention').css('display','block');
				// },2000);
				$('#attention').animate({opacity:['1','swing']},700,function(){
											});
                
			});
		})
	</script>
</body>
</html>
