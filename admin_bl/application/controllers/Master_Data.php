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

    // 

    public function ukuranForm(){
        $this->page->view('master_data/add/ukuranForm');
    }
    public function warnaForm(){
        $this->page->view('master_data/add/warnaForm');
    }
    // 

    public function addUkuran(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['singkatan'] = $_POST['singkatan'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertUkuran($data);

        if($res){
            $this->session->set_flashdata('insertUkuran', 'berhasil');
			redirect(site_url('Master_Data/ukuranForm'));	
        }else{
            $this->session->set_flashdata('insertUkuran', 'failed');
			redirect(site_url('Master_Data/ukuranForm'));	
        }

    }

    public function addWarna(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertWarna($data);

        if($res){
            $this->session->set_flashdata('insertUkuran', 'berhasil');
			redirect(site_url('Master_Data/ukuranForm'));	
        }else{
            $this->session->set_flashdata('insertUkuran', 'failed');
			redirect(site_url('Master_Data/ukuranForm'));	
        }
    }
	
	
	
}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */