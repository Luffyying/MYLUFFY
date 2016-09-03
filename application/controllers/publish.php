<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publish extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('publish_model');
	}
	public function pub_index(){
		$title = $this->input->post('title');
		$con =  $this->input->post('contents');
		$data = array(
			'writer'=>$this->session->userdata('login_user')->user_id,
			'title'=>$title,
			'content'=>$con);
		//var_dump($data['writer']);
		
		$res = $this->publish_model->save($data);
		if($res){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	public function edit_index(){
		$title = $this->input->post('title');
		$con =  $this->input->post('content');
		$blog_id = $this->input->post('blog_id');
		$data = array(
			'blog_id'=>$blog_id,
			'title'=>$title,
			'content'=>$con);
		//var_dump($data)
		$res = $this->publish_model->edit($data);
		if($res){
			echo 'success';
		}else{
			echo 'fail';
		}
	}




}