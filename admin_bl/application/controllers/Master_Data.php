<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Data extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->page->use_directory();
		$this->load->model('model_master');
	}

	public function index(){		
        // 
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
	public function kategoriForm(){
		$this->page->view('master_data/add/kategoriForm');
	}

	public function barangForm(){
		// ukuran
		$data['listUkuran'] = $this->model_master->listAllUkuran();
		// warna
		$data['listWarna'] = $this->model_master->listAllwarna();
		// kategori
		$data['listKategori'] = $this->model_master->listAllkategori();

		$this->page->view('master_data/add/barangForm',$data);
	}

	public function userForm(){
		$this->page->view('master_data/add/userForm');
	}

    // 

	public function editUkuranForm($id)
	{
		$data['detail'] = $this->model_master->listUkuranById($id);
		$this->page->view('master_data/edit/ukuranForm',$data);
	}

	public function editWarnaForm($id)
	{
		$data['detail'] = $this->model_master->listWarnaById($id);
		$this->page->view('master_data/edit/warnaForm',$data);
	}

	public function editKategoriForm($id)
	{
		$data['detail'] = $this->model_master->listKategoriById($id);
		$this->page->view('master_data/edit/kategoriForm',$data);
	}

	public function editBarangForm($id)
	{
		$data['detail'] = $this->model_master->listBarangById($id);
		$this->page->view('master_data/edit/barangForm',$data);
	}

	public function editUserForm($id)
	{
		$data['detail'] = $this->model_master->listUserById($id);
		$this->page->view('master_data/edit/userForm',$data);
	}

    // 

	public function addUkuran(){
		date_default_timezone_set('Asia/Jakarta');
		$data['nama'] = $_POST['nama'];
		$data['singkatan'] = $_POST['singkatan'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiInsertUkuran($data, 'nama');
		if ($row == '1') {
			array_push($error, 'nama');
		}

		$row = $this->model_master->validasiInsertUkuran($data, 'singkatan');
		if ($row == '1') {
			array_push($error, 'singkatan');
		}

		if (count($error)==0) {
			$res = $this->model_master->insertUkuran($data);

			if($res){
				$this->session->set_flashdata('insertUkuran', 'berhasil');
				redirect(site_url('Master_Data/ukuranForm'));	
			}else{
				$this->session->set_flashdata('insertUkuran', 'failed');
				redirect(site_url('Master_Data/ukuranForm'));	
			}
		} else {
			$this->session->set_flashdata('insertUkuran', $error);
			redirect(site_url('Master_Data/ukuranForm'));	
		}
	}

	public function addWarna(){
		date_default_timezone_set('Asia/Jakarta');
		$data['nama'] = trim($_POST['nama']);
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiInsertWarna($data);
		if ($row == '1') {
			array_push($error, 'nama');
		}

		if (count($error)==0) {
			$res = $this->model_master->insertWarna($data);

			if($res){
				$this->session->set_flashdata('insertWarna', 'berhasil');
				redirect(site_url('Master_Data/warnaForm'));	
			}else{
				$this->session->set_flashdata('insertWarna', 'failed');
				redirect(site_url('Master_Data/warnaForm'));	
			}
		} else {
			$this->session->set_flashdata('insertWarna', $error);
			redirect(site_url('Master_Data/warnaForm'));	
		}
	}

	public function addKategori(){
		date_default_timezone_set('Asia/Jakarta');
		$data['nama'] = $_POST['nama'];
		$data['opsi'] = $_POST['opsiUkuran'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiInsertKategori($data);
		if ($row == '1') {
			array_push($error, 'nama');
		}

		if (count($error)==0) {
			$res = $this->model_master->insertKategori($data);

			if($res){
				$this->session->set_flashdata('insertKategori', 'berhasil');
				redirect(site_url('Master_Data/kategoriForm'));	
			}else{
				$this->session->set_flashdata('insertKategori', 'failed');
				redirect(site_url('Master_Data/kategoriForm'));	
			}
		} else {
			$this->session->set_flashdata('insertKategori', $error);
			redirect(site_url('Master_Data/kategoriForm'));	
		}
	}

	public function addUser(){
		date_default_timezone_set('Asia/Jakarta');
		$data['nama'] = $_POST['nama'];
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);
		$data['kpass'] = md5($_POST['kpass']);
		$data['keterangan'] = $_POST['keterangan'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiInsertUser($data, 'username');
		if ($row == '1') {
			array_push($error, 'username');
		}

		$row = $this->model_master->validasiInsertUser($data, 'email');
		if ($row == '1') {
			array_push($error, 'email');
		}

		if (count($error)==0) {
			$res = $this->model_master->insertUser($data);

			if($res){
				$this->session->set_flashdata('insertUser', 'berhasil');
				redirect(site_url('Master_Data/userForm'));	
			}else{
				$this->session->set_flashdata('insertUser', 'failed');
				redirect(site_url('Master_Data/userForm'));	
			}
		} else {
			$this->session->set_flashdata('insertUser', $error);
			redirect(site_url('Master_Data/userForm'));	
		}
	}

	public function addBarang()
	{
		var_dump($_POST['daftarUkuran']);die;
		date_default_timezone_set('Asia/Jakarta');
		$data['nama'] = $_POST['nama'];
		$data['harga'] = $_POST['harga'];
			// $data['ukuran_id'] = $_POST['email'];
			// $data['warna_id'] = $_POST['password'];
		$data['link'] = $_POST['link'];
		$data['deskripsi'] = $_POST['deskripsi'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

	}

    // 

	public function editUkuran(){
		if(!isset($_POST['ukuran_id'])){
			$this->session->set_flashdata('updateUkuran', 'failed');
			redirect(site_url('Master_Data/editUkuranForm/'.$_POST['ukuran_id']));
		}

		date_default_timezone_set('Asia/Jakarta');
		$id = $_POST['ukuran_id'];
		$data['ukuran_id'] = $id;
		$data['nama'] = $_POST['nama'];
		$data['singkatan'] = $_POST['singkatan'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiUpdateUkuran($data, 'nama');
		if ($row == '1') {
			array_push($error, 'nama');
		}

		$row = $this->model_master->validasiUpdateUkuran($data, 'singkatan');
		if ($row == '1') {
			array_push($error, 'singkatan');
		}

		if (count($error)==0) {
			$res = $this->model_master->updateUkuran($data);

			if($res){
				$this->session->set_flashdata('updateUkuran', 'berhasil');
				redirect(site_url('Master_Data/editUkuranForm/'.$id));		
			}else{
				$this->session->set_flashdata('updateUkuran', 'failed');
				redirect(site_url('Master_Data/editUkuranForm/'.$id));	
			}
		} else {
			$this->session->set_flashdata('updateUkuran', $error);
			redirect(site_url('Master_Data/editUkuranForm/'.$id));	
		}
	}

	public function editWarna(){
		if(!isset($_POST['warna_id'])){
			$this->session->set_flashdata('updateWarna', 'failed');
			redirect(site_url('Master_Data/editWarnaForm/'.$_POST['ukuran_id']));
		}

		date_default_timezone_set('Asia/Jakarta');
		$id = $_POST['warna_id'];
		$data['warna_id'] = $id;
		$data['nama'] = $_POST['nama'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiUpdateWarna($data);
		if ($row == '1') {
			array_push($error, 'nama');
		}

		if (count($error)==0) {
			$res = $this->model_master->updateWarna($data);

			if($res){
				$this->session->set_flashdata('updateWarna', 'berhasil');
				redirect(site_url('Master_Data/editWarnaForm/'.$id));	
			}else{
				$this->session->set_flashdata('updateWarna', 'failed');
				redirect(site_url('Master_Data/editWarnaForm/'.$id));	
			}
		} else {
			$this->session->set_flashdata('updateWarna', $error);
			redirect(site_url('Master_Data/editWarnaForm/'.$id));	
		}
	}

	public function editKategori(){
		if(!isset($_POST['kategori_id'])){
			$this->session->set_flashdata('updateKategori', 'failed');
			redirect(site_url('Master_Data/editUserForm/'.$_POST['ukuran_id']));
		}

		date_default_timezone_set('Asia/Jakarta');
		$id = $_POST['kategori_id'];
		$data['kategori_id'] = $id;
		$data['nama'] = $_POST['nama'];
		$data['opsi'] = $_POST['opsiUkuran'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiUpdateKategori($data);
		if ($row == '1') {
			array_push($error, 'nama');
		}

		if (count($error)==0) {
			$res = $this->model_master->updateKategori($data);

			if($res){
				$this->session->set_flashdata('updateKategori', 'berhasil');
				redirect(site_url('Master_Data/editKategoriForm/'.$id));	
			}else{
				$this->session->set_flashdata('updateKategori', 'failed');
				redirect(site_url('Master_Data/editKategoriForm/'.$id));	
			}
		} else {
			$this->session->set_flashdata('updateKategori', $error);
			redirect(site_url('Master_Data/editKategoriForm/'.$id));	
		}
	}

	public function editUser(){
		if(!isset($_POST['admin_id'])){
			$this->session->set_flashdata('updateUser', 'failed');
			redirect(site_url('Master_Data/editUserForm/'.$_POST['admin_id']));
		}

		date_default_timezone_set('Asia/Jakarta');
		$id = $_POST['admin_id'];
		$data['admin_id'] = $id;
		$data['nama'] = trim($_POST['nama']);
		$data['username'] = trim($_POST['username']);
		$data['email'] = trim($_POST['email']);
		$pass = trim($_POST['password']);
		if ($pass==null || $pass=='') {
			$data['password'] = '';
			$data['kpass'] = '';
		} else {
			$data['password'] = md5($pass);
			$data['kpass'] = md5(trim($_POST['kpass']));
		}
		$data['keterangan'] = trim($_POST['keterangan']);
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$error = array();
		$row = $this->model_master->validasiUpdateUser($data, 'username');
		if ($row == '1') {
			array_push($error, 'username');
		}

		$row = $this->model_master->validasiUpdateUser($data, 'email');
		if ($row == '1') {
			array_push($error, 'email');
		}

		if (count($error)==0) {
			$res = $this->model_master->updateUser($data);

			if($res){
				$this->session->set_flashdata('updateUser', 'berhasil');
				redirect(site_url('Master_Data/editUserForm/'.$id));	
			}else{
				$this->session->set_flashdata('updateUser', 'failed');
				redirect(site_url('Master_Data/editUserForm/'.$id));	
			}
		} else {
			$this->session->set_flashdata('updateUser', $error);
			redirect(site_url('Master_Data/editUserForm/'.$id));	
		}
	}

    //

	public function hapusUkuran($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['update_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$where = array('ukuran_id' => $id);
		$res = $this->model_master->deleteData($where, 'tbl_ukuran', $data);

		if($res){
			$this->session->set_flashdata('deleteUkuran', 'berhasil');
			redirect(site_url('Master_Data/ukuran')); 
		}else{
			$this->session->set_flashdata('deleteUkuran', 'failed');
			redirect(site_url('Master_Data/ukuran')); 
		}
	}

	public function hapusWarna($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['update_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$where = array('warna_id' => $id);
		$res = $this->model_master->deleteData($where, 'tbl_warna', $data);

		if($res){
			$this->session->set_flashdata('deleteWarna', 'berhasil');
			redirect(site_url('Master_Data/warna')); 
		}else{
			$this->session->set_flashdata('deleteWarna', 'failed');
			redirect(site_url('Master_Data/warna')); 
		}
	}

	public function hapusKategori($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['update_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$where = array('kategori_id' => $id);
		$res = $this->model_master->deleteData($where, 'tbl_kategori', $data);
		// var_dump($res);die;
		if($res){
			$this->session->set_flashdata('deleteKategori', 'berhasil');
			redirect(site_url('Master_Data/kategori')); 
		}else{
			$this->session->set_flashdata('deleteKategori', 'failed');
			redirect(site_url('Master_Data/kategori')); 
		}
	}

	public function hapusUser($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['update_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$where = array('admin_id' => $id);
		$res = $this->model_master->deleteData($where, 'tbl_admin', $data);

		if($res){
			$this->session->set_flashdata('deleteUser', 'berhasil');
			redirect(site_url('Master_Data/user')); 
		}else{
			$this->session->set_flashdata('deleteUser', 'failed');
			redirect(site_url('Master_Data/user')); 
		}
	}

	public function hapusBarang($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['update_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');

		$where = array('barang_id' => $id);
		$res = $this->model_master->deleteData($where, 'tbl_barang', $data);
		// var_dump($res);die;
		if($res){
			$this->session->set_flashdata('deleteBarang', 'berhasil');
			redirect(site_url('Master_Data/barang')); 
		}else{
			$this->session->set_flashdata('deleteBarang', 'failed');
			redirect(site_url('Master_Data/barang')); 
		}
	}
}