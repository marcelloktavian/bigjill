<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_data extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->page->use_directory();
		$this->load->model('model_master');
	}
	
	public function index(){		
		// $this->page->view();
		// $data_master = null;
        // $data_master = $this->model_master->get_notice();		
		// var_dump($data_master);die;
		// $this->page->view('master_Data/barangIndex');
    }
    
    public function ukuran(){
        $data['daftar'] = $this->model_master->listAllUkuran();
        $this->page->view('master_data/ukuranIndex',$data);
    }

    public function warna(){
        $data['daftar'] = $this->model_master->listAllwarna();
        $this->page->view('master_data/warnaIndex',$data);
    }

    public function kategori(){
        $data['daftar'] = $this->model_master->listAllkategori();
        $this->page->view('master_data/kategoriIndex',$data);
    }

    public function barang(){
        $data['daftar'] = $this->model_master->listAllbarang();
        $this->page->view('master_data/barangIndex',$data);
    }

    public function user(){
        $data['daftar'] = $this->model_master->listAlluser();
        $this->page->view('master_data/userIndex',$data);
    }
	
	
	
}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */