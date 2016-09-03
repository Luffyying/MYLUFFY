<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	public function save($data){
		$this->db->insert('t_users',$data);
		if($this->db->affected_rows()>0){
	 		return true;
	 	}
	 	return false;
	}
	public function get_by_name_pwd($username,$password){
		$query = $this->db->get_where('t_users',array('username'=>$username,'password'=>$password));
	 	return $query->row();
	}
	public function get_by_id($user_id){
		$query = $this->db->get_where('t_users',array('user_id'=>$user_id));
		return $query->row();
	}

	
	// public function get_by_email_pwd($email,$pwd){
	// 	$query = $this->db->get_where('t_users',array('account'=>$email,'password'=>$pwd));
	// 	return $query->row();

	// }
	// public function save($data){
	// 	$this->db->insert(
	// 		't_users',$data);
	// 	if($this->db->affected_rows()>0){
	// 		return true;
	// 	}
	// 	return false;

	// }
	// public function get_by_email($email){
	// 		$query = $this->db->get_where('t_users',array('account'=>$email));
	// 	return $query->row();
	// }
	// public function get_by_id($user_id){
	// 		$query = $this->db->get_where('t_users',array('user_id'=>$user_id));
	// 	return $query->row();
	// }
}