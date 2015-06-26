<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lastposts_model extends CI_Model {

		public function getLastPosts(){
			$query = $this->db->query('SELECT id, title, description FROM post order by id DESC limit 5');
			return $query->result_array();
		}
	
	
}