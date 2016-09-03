<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model {
	public function showAll(){
		
		$this->db->select('blog.*,user.username as blogwriter,user.img as blogportrait');
		$this->db->from('t_blogs blog');
		$this->db->join('t_users user','blog.writer=user.user_id');
		$this->db->order_by('blog.day','desc');
		return $this->db->get()->result();
	}
	public function get_by_title($data,$flag){
		if($flag == 1){
		$this->db->set('clickrate','clickrate+1',FALSE);
		}else{
			$this->db->set('clickrate','clickrate-1',FALSE);
		}
		$this->db->where('blog_id',$data);
		$this->db->update('t_blogs');
		//return $this->db->get()->row();//have an influence
		if($this->db->affected_rows()>0){
	 		return true;
	 	}else{
	 	return false;
	 }
	}
	public function get_by_writer($user_id){
		$this->db->select('blog.*');
		$this->db->from('t_blogs blog');
		$this->db->join('t_users user','user.user_id=blog.writer');
		$this->db->where('user.user_id',$user_id);
		$this->db->order_by('blog.day','desc');
		return $this->db->get()->result();
	}
	public function get_by_id($user_id){
		$this->db->select('blog.*');
		$this->db->from('t_blogs blog');
		$this->db->join('t_users user','user.user_id=blog.writer');
		$this->db->where('user.user_id',$user_id);
		$this->db->order_by('blog.day','desc');
		return $this->db->get()->result();
	}
	public function deletetilte($blog_id){
		$this->db->where('blog_id',$blog_id);
		$this->db->delete('t_blogs');
		if($this->db->affected_rows()>0){
	 		return true;
	 	}
	 	return false;
	}
	public function gettitle($user_id,$title){
		$this->db->select('blog.*');
		$this->db->from('t_blogs blog');
		$this->db->where('blog.writer',$user_id);
		$this->db->where('blog.title',$title);
		return $this->db->get()->row();
	}
		
	
}