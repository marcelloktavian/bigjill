<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {

	public function listAllkategori(){
		$query = $this->db->query("SELECT nama, kategori_id FROM tbl_kategori WHERE deleted=0 ORDER BY nama ASC");
		$data = $query->result();
		return $data;
	}

	public function listAllbarang()
	{
		$query = $this->db->query("SELECT a.barang_id, a.nama, a.harga, b.foto_utama FROM tbl_barang a LEFT JOIN tbl_barang_foto b ON a.barang_id = b.barang_id WHERE a.deleted=0 ORDER BY a.nama ASC");
		$data = $query->result();
		return $data;
	}
}