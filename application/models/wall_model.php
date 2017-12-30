<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class Wall_Model extends CI_Model {



public function insert_post($dataset) {

	$this->db->insert('posts',$dataset);

}


public function get_post() {

	$sql = "SELECT * FROM `posts`,`user` WHERE UserId = user_id_p ORDER BY `post_id` DESC";
	$query = $this->db->query($sql);
	return $query->result();

	
	}

public function get_user_data($id) {

		$sql = "SELECT * FROM user WHERE UserID = $id";
		$query = $this->db->query($sql);
		return $query->result();


}






}


