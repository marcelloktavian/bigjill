<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->page->use_directory();
		$this->load->helper(array('form', 'url'));
	}
	
	public function index(){
		$this->page->template('contact');
		$this->page->view('templates/contact');
	}

	public function kirimEmail()
	{
		ini_set( 'display_errors', 1 );   
		error_reporting( E_ALL );  

		$from = $_POST['email'];    
		$to = "marcellino2302@gmail.com";    
		$subject = "Contact Us BigJill ".$_POST['nama'].' - '.$_POST['telp'];    
		$message = $_POST['pesan'];   
		$headers = "From:" . $from;    
		mail($to,$subject,$message, $headers);    
		// echo "Pesan email sudah terkirim.";

		$this->session->set_flashdata('email', 'berhasil');
		redirect(site_url('contact'));	
	}

}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */