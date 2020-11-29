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
        $this->page->view('master_data/add/kategoriForm');
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
        
        $res = $this->model_master->insertUkuran($data);

        if($res){
            $this->session->set_flashdata('insertUkuran', 'berhasil');
            redirect(site_url('Master_Data/ukuranForm'));	
        }else{
            $this->session->set_flashdata('insertUkuran', 'failed');
            redirect(site_url('Master_Data/ukuranForm'));	
        }

    }

    public function addWarna(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertWarna($data);

        if($res){
            $this->session->set_flashdata('insertWarna', 'berhasil');
            redirect(site_url('Master_Data/warnaForm'));	
        }else{
            $this->session->set_flashdata('insertWarna', 'failed');
            redirect(site_url('Master_Data/warnaForm'));	
        }
    }

    public function addKategori(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['opsi'] = $_POST['opsiUkuran'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertKategori($data);

        if($res){
            $this->session->set_flashdata('insertKategori', 'berhasil');
            redirect(site_url('Master_Data/kategoriForm'));	
        }else{
            $this->session->set_flashdata('insertKategori', 'failed');
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
        
        $res = $this->model_master->insertUser($data);

        if($res){
            $this->session->set_flashdata('insertUser', 'berhasil');
            redirect(site_url('Master_Data/userForm'));	
        }else{
            $this->session->set_flashdata('insertUser', 'failed');
            redirect(site_url('Master_Data/userForm'));	
        }
    }

    // 

    public function editUkuran(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['singkatan'] = $_POST['singkatan'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertUkuran($data);

        if($res){
            $this->session->set_flashdata('insertUkuran', 'berhasil');
            redirect(site_url('Master_Data/ukuranForm'));	
        }else{
            $this->session->set_flashdata('insertUkuran', 'failed');
            redirect(site_url('Master_Data/ukuranForm'));	
        }

    }

    public function editWarna(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertWarna($data);

        if($res){
            $this->session->set_flashdata('insertWarna', 'berhasil');
            redirect(site_url('Master_Data/warnaForm'));	
        }else{
            $this->session->set_flashdata('insertWarna', 'failed');
            redirect(site_url('Master_Data/warnaForm'));	
        }
    }

    public function editKategori(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['opsi'] = $_POST['opsiUkuran'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertKategori($data);

        if($res){
            $this->session->set_flashdata('insertKategori', 'berhasil');
            redirect(site_url('Master_Data/kategoriForm'));	
        }else{
            $this->session->set_flashdata('insertKategori', 'failed');
            redirect(site_url('Master_Data/kategoriForm'));	
        }
    }

    public function editUser(){
        date_default_timezone_set('Asia/Jakarta');
        $data['nama'] = $_POST['nama'];
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = md5($_POST['password']);
        $data['kpass'] = md5($_POST['kpass']);
        $data['keterangan'] = $_POST['keterangan'];
        $data['create_by'] = $this->session->admin->admin_id;
        $data['now'] = date('Y-m-d H:m:s');
        
        $res = $this->model_master->insertUser($data);

        if($res){
            $this->session->set_flashdata('insertUser', 'berhasil');
            redirect(site_url('Master_Data/userForm'));	
        }else{
            $this->session->set_flashdata('insertUser', 'failed');
            redirect(site_url('Master_Data/userForm'));	
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
}