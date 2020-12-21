<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {

	public function listAllkategori(){
		$query = $this->db->query("SELECT nama, kategori_id FROM tbl_kategori WHERE deleted=0 ORDER BY nama ASC");
		$data = $query->result();
		return $data;
	}

	public function listAllWA(){
		$query = $this->db->query("SELECT CONCAT(REPLACE(SUBSTRING(nomor,1,1),'0','62'), SUBSTRING(nomor,2)) AS nomor, nomor AS display,pesan as message FROM tbl_wa WHERE deleted=0 ORDER BY nomor ASC");
		$data = $query->result();
		return $data;
	}

	public function listAllEmail(){
		$query = $this->db->query("SELECT email FROM tbl_admin WHERE `display_email`='Y' AND deleted=0 ORDER BY email ASC");
		$data = $query->result();
		return $data;
	}

	public function listAllLokasi(){
		$query = $this->db->query("SELECT nama, url FROM tbl_lokasi WHERE deleted=0 ORDER BY nama ASC");
		$data = $query->result();
		return $data;
	}

	public function listAllbarang($limit, $start)
	{
		// var_dump($limit,$start);die;
		$query = $this->db->query("SELECT a.barang_id, a.nama, a.harga, b.foto_utama FROM tbl_barang a LEFT JOIN tbl_barang_foto b ON a.barang_id = b.barang_id WHERE a.deleted=0 ORDER BY a.nama ASC LIMIT $start,$limit ");
		$data = $query->result();
		return $data;
		
	}

	public function get_barang_list($limit, $start){
		$query = $this->db->get('tbl_barang', $limit, $start);
		return $query;
	}
}