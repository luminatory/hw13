<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Single_post_model extends CI_Model {

		public function getSinglePosts(){
			$query = $this->db->query("SELECT * FROM post where id = '" . $_GET ['id'] . "'");
			return $query->result_array();
		}
	
	
}