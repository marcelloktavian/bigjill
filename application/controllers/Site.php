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
		$data['barang'] = $this->model_dashboard->listAllbarang();
		$this->page->template('utama');
		$this->page->view('templates/utama',$data);
	}

}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */