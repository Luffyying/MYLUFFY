<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo site_url();?>"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- viewport 浏览器的屏幕  content 将浏览器屏幕宽度设为手机屏幕宽度 -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>My Blog</title>
</head>
<body>
	
	<div id="wait">
		<img class='loading' src="imgs/load.gif" alt="">
	</div>
	<div id="header">
		<span class="ho">LUFFY</span>
		<span class='ht'>留住生活中的美好</span>
		<div id="log-enr">
			<ul id="tab">
				<li id='seltwo' class='selectli'>登录</li>
				<li id ='sel'>注册</li>
			</ul>
			<div id="divs">
			<div id="login" class="selected">	
				<form  action="user/check_login" method="post" accept-charset="utf-8">
					<ul id="log-style">
					<li><input class='inputs'  type="text" name="username" value="用户名"></li>
					<li><input class='inputs'  data-placeholder='密码' type="text" name="password" value="密码"></li>
					<input type="submit" name="sub" value="登录" class='sub-enr'/>
					</ul>
				</form>
				<hr class='vertical-bar' size="140" width="0.1" color='#fff'>
			</div>

			<div id="enroll">	
				<form id='form1' action="user/enroll" method="post" accept-charset="utf-8">
					<ul id="log-style">
						<li><input class='inputs'  type="text" name="emailname" value="邮箱"></li>
						<li><input class='inputs'  type="text" name="username" value="用户名"></li>
						<li><input class='inputs'  type="text" name="password" value="密码"></li>
						<input style='border:0' type="submit" name="enroll" class='sub-enr' value='注册'/>
					</ul>
				</form>
				<hr class='vertical-bar' size="170" width="0.1" color='#fff'>
			</div>
			</div>
		</div>
	</div>
	<div id="content">
		<span id="go-top"></span>
		<div id='bigtitle'>
			The Real Life For You
		</div>
		<div id='simple'>
			
			走过的路 见过的人<br /> 都在自己内心留下或深或浅的印记 懂得在生活细微之处，创造不一样的新鲜感，愉悦自己，就是幸福<br /> 
		</div>
		<div id='intro1'>
			<span class='sp'>说走就走</span>
			<ul id='intro-pic1'>
				<li class='sp1' style='background: url(imgs/1-1.jpg) no-repeat'></li>
				<li style='background: url(imgs/1-2.jpg) no-repeat'></li>
				<li style='background: url(imgs/1-3.jpg) no-repeat'></li>
			</ul>
		</div >
		<div id='intro2'>
			<span class='sp'>抓拍</span>
			<ul id='intro-pic2'>
				<li class='sp1' style='background: url(imgs/2-1.jpg) no-repeat'></li>
				<li style='background: url(imgs/2-2.jpg) no-repeat'></li>
				<li style='background: url(imgs/2-3.jpg) no-repeat'></li>
			</ul>
		</div>
		<div id='intro3'>
			<span class='sp'>美食家</span>
			<ul id='intro-pic3'>
				<li class='sp1' style='background: url(imgs/3-1.jpg) no-repeat'></li>
				<li style='background: url(imgs/3-2.jpg) no-repeat'></li>
				<li style='background: url(imgs/3-3.jpg) no-repeat'></li>
			</ul>
		</div>
		<div id='logo'>
			<span>聚集真实的自己<br /><br />就在这里</span>
		</div>
		
	<div id="footer">
		<hr align='center' style="border:2 solid #000"  width="100%" size=1/><br/>
		<span class="mycopy">&copy&nbspLuffyying2016</span>
	</div>
	<script src='js/jquery-1.12.2.js'></script>
	<script>
	    $(window).on('load',function(){//预加载而非懒加载
	    	$('#wait').remove();
	   // });
		//$(function(){
			//the change for the bg
			// var pic = {
			// 	show:function(){
			// 		var i=4;
			// 		var timer= setInterval(function(){
			// 		$('#header').css('background-image','url(imgs/'+i+'.jpg)');
			// 			i++;
			// 			if(i>23) clearInterval(timer);
			// 		},2000);
			// 	}
			// };
			// pic.show();
//function1:go back to top
			
			$('#go-top').click(function(){
					var iScrollTop = document.documentElement.scrollTop || document.body.scrollTop;

			var timer = setInterval(function(){
				window.scrollTo(0, iScrollTop*=0.6);
				if(iScrollTop <= 1){
					window.scrollTo(0, 0);
					clearInterval(timer);
				}
			}, 20);
			return false;
			});
			// $('#go-top').click(function(){
			// 	var iScrollTop = $(document).scrollTop()||$(document).scrollTop();//获取html
			// 	var $timer = setInterval(function(){
			// 		MyscrollTo(0,iScrollTop*=0.8);
			// 		if(iScrollTop <= 1){
			// 	    MyscrollTo(0,0);
			// 	    clearInterval($timer);
			//          }
			// 	},20);
			// });
			$(window).scroll(function(){
				var iScrollTop = $(document).scrollTop()||$(document).scrollTop();
				if(iScrollTop > 500 ){
					$('#go-top').css('display','block');
				}else{
					$('#go-top').css('display','none');
				}
			});

//function2:the focus and blur for the input
			$(".inputs").focus(function(){//$("input, textarea")
				if($(this).val()==this.defaultValue){
					$(this).val('');
				}
			}).blur(function(){
				  $(this).val(this.value ==''?this.defaultValue:this.value);
			});
			
//the tab control				
		function MyscrollTo(){

		}	
		});
		var oTab = document.getElementById('tab');
		var aLi = oTab.children;//oTab.getElementByTagName('li');和它也不同，这个可以找到几级的li
		var oContent = document.getElementById('divs');
		var aDiv = oContent.children;
		for(var i=0;i<aLi.length;i++)
		{
			aLi[i].index = i;
			aLi[i].onclick = function(){
				for(var i=0;i<aLi.length;i++){
					aDiv[i].className = '';
					aLi[i].className = '';
				}
				this.className = 'selectli';
				aDiv[this.index].className = 'selected';
			};
		}

	</script>
			
			
</body>
</html>
