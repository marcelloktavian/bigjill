<?php defined('BASEPATH') OR exit('No direct script access allowed');class Dashboard extends MX_Controller {		public function __construct(){		parent::__construct();				$this->page->use_directory();		// $this->load->model('model_dashboard');	}		public function index(){				//$this->page->view();		$data_master = null;        // $data_master = $this->model_dashboard->get_notice();				//var_dump($data_master);die;		$this->page->view('templates/main_content',array (			'notice'	=> $data_master		));	}	}/* End of file dasbor.php *//* Location: ./application/controllers/dasbor.php */