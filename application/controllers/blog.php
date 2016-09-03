<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('comment_model');
	}
	public function view($blog_id)//此时接到的数据直接使用参数的形式
	{
		//connect user and blog
		$blog = $this->blog_model->get_by_id($blog_id);
		//query the comments
		$comments =$this->comment_model->get_by_blog_id($blog_id);
		$data = array(
			'blog'=>$blog,
			'comments'=>$comments);
		$this->load->view('view_post',$data);

	}
	public function likeMessage(){
		$blog_id = $this->input->post('blog_id');
		$flag =  $this->input->post('flag');
		$res = $this->blog_model->get_by_title($blog_id,$flag);
		if($res){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	public function mytitles(){
		$blog_id=$this->session->userdata('login_user')->user_id;
		$blogs = $this->blog_model->get_by_id($blog_id);
		$mydata = array(
			'blogs'=>$blogs
			);
		$this->load->view('mytitles',$mydata);
	}
	public function delete(){
		$blog_id = $this->input->post('blog_id');
		$res = $this->blog_model->deletetilte($blog_id);
		if($res){
			echo 'success';
		}else{
			echo 'fail';
		}
	}

	
	
}
