<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publish_model extends CI_Model {
	public function save($data){

        $this->db->insert('t_blogs',$data);
        $this->db->set('title_num','title_num+1',false);

        $this->db->where('user_id',$data['writer']);
		$this->db->update('t_users');
        if($this->db->affected_rows()>0){
	 		return true;
	 	}
	 	return false;
	
	}
	public function edit($data){

		// $datas = array(
		// 	'title'=>$data['title'],
		// 	'content'=>$data['content']);
       // var_dump($data['title']);
		$a = $data['title'];
		$b = $data['content'];
		$c = $data['blog_id'];
		$this->db->set('title',$a);
		$this->db->set('content',$b);
		$this->db->where('blog_id',$c);
		$this->db->update('t_blogs');
		if($this->db->affected_rows()>0){
	 		return true;
	 	}
	 	return false;
	}

}