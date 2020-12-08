<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->page->use_directory();
		$this->load->model('model_search');
	}
	
	public function index(){		
		
	}

	public function Kategori($id)
	{
		var_dump($id);die;
	}
	
	public function Barang()
	{
		$barang = $_POST['search'];
		var_dump($barang);die;
	}

}

/* End of file dasbor.php */
/* Location: ./application/controllers/dasbor.php */