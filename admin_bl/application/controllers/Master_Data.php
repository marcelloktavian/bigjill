<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Data extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->page->use_directory();
		$this->load->helper(array('form', 'url'));
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
		// var_dump($data);die;
		// ukuran
		$data['listUkuran'] = $this->model_master->listAllUkuran();
		// warna
		$data['listWarna'] = $this->model_master->listAllwarna();
		// kategori
		$data['listKategori'] = $this->model_master->listAllKategori();
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
		$idwarna	= str_replace(',',';',$_POST['hiddenWarna']);
		$idukuran	= str_replace(',',';',$_POST['hiddenUkuran']);
		// insert ke table barang
		date_default_timezone_set('Asia/Jakarta');
		$data['nama'] = $_POST['nama'];
		$data['harga'] = $_POST['harga'];
		$data['kategori_id'] = $_POST['kategoriop'];
		$data['ukuran_id'] = $idukuran;
		$data['warna_id'] = $idwarna;
		$data['link'] = $_POST['link'];
		$data['deskripsi'] = $_POST['deskripsi'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');
		
		// insert ke table barang foto
		$gambar['utama'] = $this->_uploadUtama('imagesUtama');
		$gambar['foto_1'] = $this->_uploadUtama('images1');
		$gambar['foto_2'] = $this->_uploadUtama('images2');
		$gambar['foto_3'] = $this->_uploadUtama('images3');
		$gambar['foto_4'] = $this->_uploadUtama('images4');
		// var_dump($gambar);die;
		$result_master = $this->model_master->insertBarang($data);
		$gambar['barang_id'] = $result_master;
		$result_foto = $this->model_master->fotoBarang($gambar);

		// var_dump($gambar);

		if($result_foto){
			$this->session->set_flashdata('insertBarang', 'berhasil');
			redirect(site_url('Master_Data/barang'));	
		}else{
			$this->session->set_flashdata('insertBarang', 'failed');
			redirect(site_url('Master_Data/barang'));	
		}
	}

	function editBarang(){
		$idwarna	= str_replace(',',';',$_POST['hiddenWarna']);
		$idukuran	= str_replace(',',';',$_POST['hiddenUkuran']);
		// insert ke table barang
		date_default_timezone_set('Asia/Jakarta');
		$data['barang_id']=$_POST['idbarang'];
		$data['nama'] = $_POST['nama'];
		$data['harga'] = $_POST['harga'];
		$data['kategori_id'] = $_POST['kategoriop'];
		$data['ukuran_id'] = $idukuran;
		$data['warna_id'] = $idwarna;
		$data['link'] = $_POST['link'];
		$data['deskripsi'] = $_POST['deskripsi'];
		$data['create_by'] = $this->session->admin->admin_id;
		$data['now'] = date('Y-m-d H:m:s');
		// var_dump($_POST['hidden_utama'],$_FILES['imagesUtama']['name']);die;
		if($_FILES['imagesUtama']['name']!==""){
			$gambar['utama'] = $this->_uploadUtama('imagesUtama');
		}else{
			$gambar['utama'] = $_POST['hidden_utama'];
		}
		if( $_FILES['images1']['name']!==""){
			$gambar['foto_1'] = $this->_uploadUtama('images1');
		}else{
			$gambar['foto_1']= $_POST['hidden_foto1'];
		}
		if( $_FILES['images2']['name']!==""){
			$gambar['foto_2'] = $this->_uploadUtama('images2');
		}else{
			$gambar['foto_2']= $_POST['hidden_foto2'];
		}
		if( $_FILES['images3']['name']!==""){
			$gambar['foto_3'] = $this->_uploadUtama('images3');
		}else{
			$gambar['foto_3']= $_POST['hidden_foto3'];
		}
		if( $_FILES['images4']['name']!==""){
			$gambar['foto_4'] = $this->_uploadUtama('images4');
		}else{
			$gambar['foto_4']= $_POST['hidden_foto4'];
		}
		$gambar['barang_id'] = $_POST['idbarang'];
		// // var_dump($gambar);die;
		// var_dump($data);
		// var_dump($gambar);die;

		$result_master = $this->model_master->UpdateBarang($data);
		// var_dump($result_master);die;
		
		$result_foto = $this->model_master->UpdatefotoBarang($gambar);

		if($result_foto){
			$this->session->set_flashdata('updateBarang', 'berhasil');
			redirect(site_url('Master_Data/barang'));	
		}else{
			$this->session->set_flashdata('updateBarang', 'failed');
			redirect(site_url('Master_Data/barang	'));	
		}
	}

	// 

	// for upload file

	private function _uploadUtama($imageId)
	{

				// $newName = uniqid().$imageId;
		$config['upload_path']          = './assets/img/barang/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024;
				// $config['file_name']            = $newName;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($imageId))
		{
			$pesan = '';
			if($_FILES[$imageId]['error']== 4 && $imageId=='images1'){
				return false;
			}else if($_FILES[$imageId]['error']== 4 && $imageId=='images2'){
				return false;		
			}else if($_FILES[$imageId]['error']== 4 && $imageId=='images3'){
				return false;
			}else if($_FILES[$imageId]['error']== 4 && $imageId=='images4'){
				return false;
			}else{
				if($_FILES[$imageId]['size'] >1024){
					$pesan = 'Ukuran Harus Kurang Dari / = dari 1 mb';
				}else if ($_FILES[$imageId]['error']==4 ){
					$pesan = 'Gambar Utama Wajib Di upload';
				}
			$this->session->error = $pesan;
			// return $error;
			$this->session->set_flashdata('insertBarang', 'failedfoto');
			redirect(site_url('Master_Data/barangForm'));
			die;
			}
		}
		else
		{
			return $this->upload->data("file_name");
		}
		
		return $this->upload->data("file_name");


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

	//

	public function ajaxbarang()
	{
		$id = $_POST['idbarang'];
		$res = $this->model_master->viewDetailBarang($id);
		echo json_encode($res);
	}

	public function ajaxukuran()
	{
		$ukuran = $_POST['idukuran'];
		$res = $this->model_master->viewUkuranBarang($ukuran);
		echo json_encode($res);
	}

	public function ajaxwarna()
	{
		$warna = $_POST['idwarna'];
		$res = $this->model_master->viewWarnaBarang($warna);
		echo json_encode($res);
	}

	public function getListUkuran()
	{
		$data = $this->model_master->listUkuranById($_POST['id']);
		// var_dump($data);die;
		// $this->page->view('master_data/edit/ukuranForm',$data);
		echo json_encode($data);
	}

	public function getListWarna()
	{
		$data = $this->model_master->listWarnaById($_POST['id']);
		// var_dump($data);die;
		// $this->page->view('master_data/edit/ukuranForm',$data);
		echo json_encode($data);
	}
}