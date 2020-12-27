<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->page->use_directory();
		$this->load->helper(array('form', 'url'));
		$this->load->model('model_dashboard');
		$this->load->library('pagination');
	}
	
	public function index(){
		//konfigurasi pagination
        $config['base_url'] = site_url('site/index'); //site url
        $this->db->where('deleted',0);
        $this->db->from('tbl_barang');
        $config['total_rows'] = $this->db->count_all_results(); //total row
        $config['per_page'] = 9;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination 
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['pagination'] = $this->pagination->create_links();

        $data['daftar'] = $this->model_dashboard->listAllkategori();
        $data['wa'] = $this->model_dashboard->listAllWA();
        $data['email'] = $this->model_dashboard->listAllEmail();
        $data['lokasi'] = $this->model_dashboard->listAllLokasi();
        $data['barang'] = $this->model_dashboard->listAllbarang($config["per_page"], $data['page']);
        $this->page->template('utama');
        $this->page->view('templates/utama',$data);
}

}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */