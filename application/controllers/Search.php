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

	public function Detail($id)
	{	
		if ($id=='ajaxbarang') {
			$id = $_POST['idbarang'];
			$res = $this->model_search->viewDetailBarang($id);
			echo json_encode($res);
		} else if ($id=='ajaxukuran') {
			$ukuran = $_POST['idukuran'];
			$res = $this->model_search->viewUkuranBarang($ukuran);
			echo json_encode($res);
		} else if ($id=='ajaxwarna') {
			$warna = $_POST['idwarna'];
			$res = $this->model_search->viewWarnaBarang($warna);
			echo json_encode($res);
		} else {
			$this->page->template('detailBarang');
			$this->page->view('templates/detailBarang');
		}
		
		
	}

}

/* End of file dasbor.php */
/* Location: ./application/controllers/dasbor.php */