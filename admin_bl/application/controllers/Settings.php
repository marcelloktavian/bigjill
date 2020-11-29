<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		
        $this->page->use_directory();
        $this->load->model('model_settings');
    }

    public function index(){		
        // 
    }
    
    public function changePass(){
        $this->page->view('settings/changepass');
    }
}