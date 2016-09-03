<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	public function __construct(){//execute first
		parent::__construct();
		$this->load->model('comment_model');
		$this->load->model('blog_model');
	}
	public function index()
	{
		
	}
	public function post()
	{
		$blog_id = $this->input->post('blogId');
		$content = $this->input->post('content');
		$login_user = $this->session->userdata('login_user');
		$user_id = $login_user->user_id;
		$save_data = array(
			'commentator'=>$user_id,
			'blog_id'=>$blog_id,
			'content'=>$content);
		$result = $this->comment_model->save($save_data);
		if($result){
			echo 'success';
		}else{
			echo 'fail';
		}

	}
}