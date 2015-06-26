<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Lastposts_model');
		$data['articles'] =$this->Lastposts_model->getLastPosts();
		$this->load->model('Get_All_Categories_Model');
		$data['categories'] = $this->Get_All_Categories_Model->getAllCategories();
		$this->load->view('last_articles_view', $data);
				
	}

	function login(){
		$this->load->view('login_view');
	}
	 function single_posts(){
	 	$this->load->model('Single_post_model');
	 	$data['posts'] = $this->Single_post_model->getSinglePosts();
	 	$this->load->view('single_post_view', $data);
	 }

	 function categories(){
	 	
     $this->load->view('category_view');
	}
}