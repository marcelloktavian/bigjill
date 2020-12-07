<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->page->use_directory();
		$this->load->helper(array('form', 'url'));
		$this->load->model('model_dashboard');
	}
	
	public function index(){
		$data['daftar'] = $this->model_dashboard->listAllkategori();
		$this->page->template('login_tpl');
		$this->page->view('templates/login_tpl',$data);
	}
	
}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */