<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {

	public function getPosts(){
		$query = $this->db->get('post')
		return $query->result_array();
	}
}