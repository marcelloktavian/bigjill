<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {
    /*
	public	$propose   	  = '';
	public	$unpaid   	  = '';
	*/
	public function listAllkategori(){
		$query = $this->db->query("SELECT nama, LOWER(REPLACE(nama,' ','')) as link FROM tbl_kategori WHERE deleted=0 ORDER BY nama ASC");
		$data = $query->result();
		return $data;
	}

	
}