<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_All_Categories_Model extends CI_Model {

	public function getAllCategories(){
		$query = $this->db->query("SELECT id, name FROM category");
		return $query->result_array();
	}
}