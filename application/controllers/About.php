<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->page->use_directory();
		$this->load->helper(array('form', 'url'));
	}
	
	public function index(){
		$this->page->template('about');
		$this->page->view('templates/about');
	}

}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */