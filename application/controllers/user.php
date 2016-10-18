<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('blog_model');
		//$this->load->model('comment_model');
	}
	public function index(){
        $this->load->view('index');
	
	}
	public function user_index(){
		$add = '';
		if($_FILES['myfile']){
		  $uploaddir = "imgs/";//设置文件保存目录 注意包含/  
            $type=array("jpg","gif","bmp","jpeg","png");//设置允许上传文件的类型
             function fileext($filename){
                 return substr(strrchr($filename, '.'), 1);
             }
             function random($length) {
                 $hash = 'CR';
                 $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
                 $max = strlen($chars) - 1;
                 mt_srand((double)microtime() * 1000000);
                     for($i = 0; $i < $length; $i++)
                     {
                         $hash .= $chars[mt_rand(0, $max)];
                     }
                 return $hash;
             }
             if(!in_array(strtolower(fileext($_FILES['myfile']['name'])),$type)){   
                 $text=implode(",",$type);
                 //echo "您只能上传以下类型文件: ",$text,"<br>";
              }
             else{
               $filename=explode(".",$_FILES['myfile']['name']);
                 do {
                     $filename[0]=random(10); 
                     $name=implode(".",$filename);
                     //$name1=$name.".Mcncc";
                     $uploadfile=$uploaddir.$name;
                 } while(file_exists($uploadfile));
                 //var_dump($uploadfile);
                 //var_dump($_FILES['myfile']['tmp_name']);//得到临时存储位置
                 if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
                     if(move_uploaded_file($_FILES['myfile']['tmp_name'],$uploadfile)){ 
                           // var_dump($uploadfile);
                     	//$add= '../'. $uploadfile;
                        //echo "<img src='$add'>";
                        $add = $name;
                     }
                     else{
                           // echo "上传失败！";
                         }
                 }
             }
         }
		$user_id = $this->session->userdata('login_user')->user_id;
	    if($add !=''){
	    	
	    	$d = $this->blog_model->addPic($add,$user_id);
	    	if(!$d){
                //echo 'error';
	    	}
	    }
	    $pic = $this->blog_model->add_by_id($user_id);
		$data = $this->blog_model->showAll();
		
		$datas = array(
		'blogs'=>$data,
		'pic'=>$pic
		   );
		// var_dump($pic->img);
		 //die;
		
		$this->load->view('user_index',$datas);
		
	
	}
	public function self_index(){
		$user_id = $this->input->get('writer');
		$writer = $this->user_model->get_by_id($user_id);
        $blogs = $this->blog_model->get_by_writer($user_id);
		$data = array(
			'writer'=>$writer,
			'yourblogs'=>$blogs
			);
		$this->load->view('self_index',$data);
	
	}
	public function logout(){
       $this->session->unset_userdata('login_user');
		redirect('user/index');
	
	}
	public function stu(){
        $this->load->view('stu');

	}
	public function check_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$row =  $this->user_model->get_by_name_pwd($username,$password);
		$data = $this->blog_model->showAll();
		//$res = $this->user_model->login($data);
		if($row){
			$this->session->set_userdata('login_user',$row);//set the cookie
			$user_id = $this->session->userdata('login_user')->user_id;
			$pic = $this->blog_model->add_by_id($user_id);
			if($pic->img =='2.jpg'){
				$p = '0';
			}else{
				$p = $pic->img;
			}
			$datas = array(
			'blogs'=>$data,
			'pic'=>$p
		    );
		    $this->load->view('user_index',$datas);
		}else{
			redirect('user/index');
		}
	}
	public function enroll(){
		$emailname = $this->input->post('emailname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');	
		$data = $this->blog_model->showAll();
		$infor = array(
			'emailname'=>$emailname,
			'username'=>$username,
			'password'=>$password);
		$res = $this->user_model->save($infor);
		$cookie = $this->user_model->get_by_name_pwd($username,$password);
		$datas= array(
			'blogs'=>$data,
			'pic'=>'0');
		if($res){
			$this->session->set_userdata('login_user',$cookie);//set the cookie
			  $this->load->view('user_index',$datas);
			//redirect('user/user_index',$data);
		}else{
			$this->index();
		}
	}
	public function archivedfile(){

		$user_id = $this->session->userdata('login_user')->user_id;
		$data = $this->blog_model->get_by_id($user_id);
		$datas= array(
			'writer'=>$this->session->userdata('login_user'),
			'blogs'=>$data);
		
		$this->load->view('archived',$datas);
	}
	public function letter(){
		$data = array(
			'writer'=>$this->session->userdata('login_user')
			);
		$this->load->view('letter',$data);
	}
	public function rss(){
		$data = array(
			'writer'=>$this->session->userdata('login_user')
			);
		$this->load->view('rss',$data);
	}
	public function title(){
		$user_id = $this->session->userdata('login_user')->user_id;
		$title = $this->input->get('blogtitle');
		$data = $this->blog_model->gettitle($user_id,$title);
		$datas= array(
			'writer'=>$this->session->userdata('login_user')->username,
			'blog'=>$data);
		$this->load->view('title',$datas);
	}

}
