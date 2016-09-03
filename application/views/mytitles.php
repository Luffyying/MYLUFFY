<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Blog Study</title>
	<base href="<?php echo site_url();?>"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user_index.css">
	<link rel="stylesheet" type="text/css" href="css/mytitles.css">
	<link rel="stylesheet" type="text/css" href="css/cover.css">
</head>
<body>
	<div id="cover2">
	<table id="publish2">
		<tbody>
			<tr>
				<td style='color:#fff'>标题&nbsp&nbsp&nbsp</td>
				<td><input class='mytitle' type="text" name='title' style='width: 400px;height: 30px;font-size:17px'></input></td><br/><br/>
			</tr>
			<tr>
				<td style='color:#fff'>内容&nbsp&nbsp&nbsp&nbsp</td>
				<td>
					<textarea id='content_3' name="content_3"
					style='width:500px;height: 300px'></textarea>
				</td>
			</tr>
			 <tr id='selection2'>
				<td><span style='margin-left:100px' id='undo2'>取消</span></td>
				<td><span id='submit2'>提交</span></td>
			</tr> 
		</tbody>
	</table>
	</div>
	<div id="cover">
		<table id="publish">
			<tbody>
				<tr>
					<td style='color:#fff'>标题&nbsp&nbsp&nbsp</td>
					<td><input class='mytitle' type="text" name='title' style='width: 400px;height: 30px;font-size:17px'></input></td><br/><br/>
					<td><input type='hidden' class='hidid' value='' /></td>
				</tr>
				<tr>
					<td style='color:#fff'>内容&nbsp&nbsp&nbsp&nbsp</td>
					<td>
						<textarea id='content_2' name="content_2"
						style='width:500px;height: 300px'></textarea>
					</td>
				</tr>
				 <tr id='selection'>
					<td><span style='margin-left:100px' id='undo'>取消</span></td>
					<td><span id='save'>保存</span></td>
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
				<li class="userblock"><img class='hov' src="imgs/upload2.jpg" alt=""></li>
				<li id='mnote' class="conblock"><img class='hov' src="imgs/a1.jpg" alt=""><img class='init' src="imgs/w1.jpg" alt=""></li>
				<li class="conblock"><a href="" title=""><img class='hov' src="imgs/a2.jpg" alt=""><img class='init' src="imgs/w2.jpg" alt=""></a></li>
				<li class="conblock"><a href="" title=""><img class='hov' src="imgs/a4.jpg" alt=""><img class='init' src="imgs/w3.jpg" alt=""></a></li>
				<li class="conblock" style='border-right: 0px'><a href="" title=""><img src="imgs/a3.jpg" class='hov' alt=""><a href="" title=""><img class='init'  src="imgs/w4.jpg" alt=""></a></li>
			</ul>
		</div>
		<div id="manger">
			<ul>
				<li class="userinf mgr">
				<a href="user/self_index?writer=<?php echo $this->session->userdata('login_user')->user_id;?>"><?php echo $this->session->userdata('login_user')->username;?></a>
				</li>
				<div id="exit"></div>
				<img class='down' src="imgs/27.jpg" alt="">
				<li class="mgr"><a herf=''>文章(<?php echo $this->session->userdata('login_user')->title_num;  ?>)</a></li>
				<li class="mgr"><a herf=''>喜欢(<?php echo $this->session->userdata('login_user')->love_num; ?>)</a></li>
				<li class="mgr"><a herf=''>关注(<?php echo $this->session->userdata('login_user')->comment_num; ?>)</a></li>
				<li class="mgr"><a herf=''>通知(<?php echo $this->session->userdata('login_user')->infor_num; ?>)</a></li>
				<li  class="mgr" style='border-bottom: 0'><a herf=''>私信(<?php echo $this->session->userdata('login_user')->message_num; ?>)</a></li>
			</ul>
		</div>
		<div id='note'>
			<ul id='blogs' class='blog-block'>
			<?php foreach($blogs as $blog){?>
				<li class='firstli'>
				<?php $s = $blog->blog_id ;?>
				<?php $st = $blog->content;?>
					<input id='hideblogid' type='hidden' value='<?php echo $s?>' />
					<input id='hideblogcon' type='hidden' value='<?php echo $st?>' />
					<div class='note-con'>
						<h2><?php echo $blog->title ;?></h2><br/><br/>
						<?php $str = $blog->content ?>
						<p class='mywords'><?php echo mb_substr($str,0,10,"utf-8");?></p>
						<p class='add'><?php echo $str;?></p>
						<div class='hid-comment'>
							<textarea id="postContent" name="content"></textarea>
							<button class='btn'>OK</button>
						</div>	
						  	
					</div>
					<div id='user-infors'>
							<span class='more'>展开</span>
							<span class='edit'>编辑</span>&nbsp&nbsp
							<span class='del'>删除</span>&nbsp&nbsp
							&nbsp&nbsp
							<span><?php echo $blog->day ;?></span>&nbsp&nbsp
					</div>						
				</li>
				<?php }?>
			</ul>
		</div>
		<div id="footer">
		<hr align='center' style="border:2 solid #000"  width="100%" size=1/><br/>
		<span class="mycopy">&copy&nbspLuffyying2016</span>
		
		</div>
			
		
	</div>

	
	<script src='js/jquery-1.12.2.js'></script>
	<script type='text/javascript' src='kindeditor/kindeditor-min.js' charset='utf-8'></script>
	<script>
		KE.show({
			id:'content_2'
		});
		KE.show({
			id:'content_3'
		});

	</script>
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
				}else{//unfold
				$(this).parents('.firstli').children('.note-con').children('.mywords').css('display','block');
				$(this).parents('.firstli').children('.note-con').children('.add').css('display','none');
				$(this).parents('.firstli').css('height',parseInt($(this).parents('.firstli').children('.note-con').children('.mywords').css('height'))+$h+'px');
				$(this).text('展开');
				}
				if(($(this).attr('flag'))=='false'){
					$(this).attr('flag','true');
				}
				else{
					$(this).attr('flag','false');
				}
			
				
			})

			//love the message~~~~~~~~~~~~~~~~~~~~~have a big bug!!!!!!!

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
				$title = $(this).parents('.note-con').children('h2').text();
					$.post('blog/likeMessage',{blogtitle:$title,flag:$flag},function(res){
						if(res=='fail'){
							alert('点评喜欢失败');
						}
					},'text');
			})

			

			//the function of comment
			$('.com').each(function(){
				$(this).attr('flag','false');
			});
			$('.com').on('click',function(){
				if(($(this).attr('flag'))=='false'){//fold
					$(this).parents('.firstli').children('.note-con').children('.hid-comment').css('display','block');
					$(this).parents('.firstli').css('height',parseInt($(this).parents('.firstli').css('height'))+100+'px');
				}else{
					$(this).parents('.firstli').children('.note-con').children('.hid-comment').css('display','none');
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
					$.post('comment/post',{blogId:$(this).parents('.displayid').text(),
					content:$('#postContent').val()},function(res){
					if(res=='fail'){
        				alert('评论失败');
        			}else{
        				location.reload();//redraw
        			}
				},'text');
				});
				
			})

			//delete the title
			$('.del').each(function(){
				$(this).on('click',function(){
					$blog_id = $(this).parents('.firstli').children('#hideblogid').val();
					$.post('blog/delete',{blog_id:$blog_id},function(res){
						if(res=='success'){
							alert('删除成功');
						}else{
							alert('删除失败');
						}
					},'text');
					$(this).parents('.firstli').remove();
					
					
				})
			})

			//edit the title
			$('.edit').each(function(){
				$(this).on('click',function(){
					$('#cover').css('display','block').css('height',$(document).height()+'px');
					//KE.util.setData("content_2",'haha');
					$('.mytitle').val($(this).parents('.firstli').children('.note-con').children('h2').text());
					KE.html('content_2',$(this).parents('.firstli').children('#hideblogcon').val());
					$bid = $(this).parents('.firstli').children('#hideblogid').val();
					$('.hidid').val($bid);
				})
			})

			$('#save').on('click',function(){
				$.post('publish/edit_index',{blog_id:$('.hidid').val(),title:$('.mytitle').val(),
					content:KE.util.getData('content_2')},function(res){
						if(res=='success'){
							alert('修改成功');
							$('#cover').css('display','none');
							location.reload();//redraw
						}else{
							alert('修改失败');
						}
					});
			});
	
		   	$('#submit2').on('click',function(){
				var s = KE.util.getData("content_3");
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
			$('#undo2').on('click',function(){
				$('#cover2').css('display','none');
			});
			$('#undo').on('click',function(){
				$('#cover').css('display','none');
			});
			//publish the title
			$('#mnote').on('click',function(){
				$('#cover2').css('display','block').css('height',$(document).height()+'px');
			});


		})
	</script>
</body>
</html>