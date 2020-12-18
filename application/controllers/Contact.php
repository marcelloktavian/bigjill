<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->page->use_directory();
		$this->load->helper(array('form', 'url'));
		$this->load->library('email');
	}
	
	public function index(){
		$this->page->template('contact');
		$this->page->view('templates/contact');
		$this->load->library('form_validation');
	}

	public function kirimEmail()
	{
		// ini_set( 'display_errors', 1 );   
		// error_reporting( E_ALL );  

		// $from = $_POST['email'];    
		// $to = "marcellino2302@gmail.com";    
		// $subject = "Contact Us BigJill ".$_POST['nama'].' - '.$_POST['telp'];    
		// $message = $_POST['pesan'];   
		// $headers = "From:" . $from;    
		// mail($to,$subject,$message, $headers);    
		// // echo "Pesan email sudah terkirim.";

		// $this->session->set_flashdata('email', 'berhasil');
		// redirect(site_url('contact'));
		
		//Set form validation
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[16]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[12]|max_length[200]');
	
		//Run form validation
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('contact');
		} else {
	
			//Get the form data
			$name = $this->input->post('name');
			$from_email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
	
			//Web master email
			$to_email = 'admin@domain.com'; //Webmaster email, who receive mails
	
			//Mail settings
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
			$config['smtp_port'] = '465';
			$config['smtp_user'] = 'mail@domain.com'; // Your email address
			$config['smtp_pass'] = 'mailpassword'; // Your email account password
			$config['mailtype'] = 'html'; // or 'text'
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE; //No quotes required
			$config['newline'] = "\r\n"; //Double quotes required
	
			$this->email->initialize($config);                        
	
			//Send mail with data
			$this->email->from($from_email, $name);
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			
			if ($this->email->send())
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
	
				redirect('contact');
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
				redirect(site_url('contact'));
			}

	}

}

/* End of file site.php */
/* Location: .bigjill/admin_bl/application/controllers/site.php */