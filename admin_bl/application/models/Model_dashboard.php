<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {
    /*
	public	$propose   	  = '';
	public	$unpaid   	  = '';
	*/
	// public function get_notice(){
	// 	$query = "SELECT (SELECT COUNT(*) FROM mst_karyawan WHERE karyawan_lama='0' ) AS new_karyawan,(SELECT COUNT(*) FROM mst_karyawan WHERE (YEAR(tgl_akhirkontrak) <= YEAR(NOW())) AND (MONTH(tgl_akhirkontrak) <= MONTH(NOW())) AND (departement <>'RESIGN HOME') AND (departement <>'STAFF')) AS expired_kontrak";
	// 	$datasrc=$this->db->query($query);
	// 	return $datasrc->num_rows() > 0 ? $datasrc->row() : $this;
	// }
	
}

/* End of file Model_dashboard.php */
/* Location: ./application/models/Model_dashboard.php */