<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo site_url();?>"/>
	<title>upload file example</title>
</head>
<body>
hahaha
	<!-- <form action="user/index" method="get" accept-charset="utf-8" enctype="multipart/form-data">
		<table border=0 cellspacing=0 cellpadding=0 align=center width="100%">
			<tr>
				<td>
					<input type='hidden'  >the file:
				</td>
				<td height='16'>
					<input name='file' type='file' />
					<input type='submit' name='sub' value='submit' />
				</td>
			</tr>
		</table>
	</form> -->
</body>
</html>
<?php
   // $uploaddir = "./files/";//设置文件保存目录 注意包含/  
   // $type=array("jpg","gif","bmp","jpeg","png");//设置允许上传文件的类型
   // $patch="http://localhost/ha/htdocs/files/";//程序所在路径
   // $file = $_FILES['file'];
   // $name = $file['name'];
   // echo $file;
   // echo $name;
   //  echo $uploaddir;
   
    // function fileext($filename){
    //     return substr(strrchr($filename, '.'), 1);
    // }
    // function random($length)
    // {
    //     $hash = 'CR-';
    //     $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
    //     $max = strlen($chars) - 1;
    //     mt_srand((double)microtime() * 1000000);
    //         for($i = 0; $i < $length; $i++)
    //         {
    //             $hash .= $chars[mt_rand(0, $max)];
    //         }
    //     return $hash;
    // }
   // $a=strtolower(fileext($_FILES['file']['name']));
   // echo $a;
 
   // if(!in_array(strtolower(fileext($_FILES['file']['name'])),$type))
   //   {
   //      $text=implode(",",$type);
   //      echo "您只能上传以下类型文件: ",$text,"<br>";
   //   }
 
   // else{
   //  	$filename=explode(".",$_FILES['file']['name']);
   //      do {
   //          $filename[0]=random(10); 
   //          $name=implode(".",$filename);
   //          //$name1=$name.".Mcncc";
   //          $uploadfile=$uploaddir.$name;
   //      } while(file_exists($uploadfile));
       
   //      if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){          
   //          if(is_uploaded_file($_FILES['file']['tmp_name'])){
               
   //              echo "<center>您的文件已经上传完毕 上传图片预览: </center><br><center><img src='$uploadfile'></center>";
   //              echo"<br><center><a href='javascrīpt:history.go(-1)'>继续上传</a></center>";
   //            }
   //            else{
   //              echo "上传失败！";
   //            }
   //      }
   // }
?>
