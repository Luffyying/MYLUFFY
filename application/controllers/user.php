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
	// public function uploadpic(){
	// 	$this->load->view('upload');
	// }
	public function user_index(){
		$data = $this->blog_model->showAll();
	
		//$res = $this->user_model->login($data);
		$data = array(
		'blogs'=>$data
		   );
		$this->load->view('user_index',$data);
		
	
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
			$datas = array(
			'blogs'=>$data
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
			'blogs'=>$data);
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
