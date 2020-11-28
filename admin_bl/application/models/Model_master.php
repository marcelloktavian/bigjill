<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_Model {
    /*
	public	$propose   	  = '';
	public	$unpaid   	  = '';
	*/
	public function listAllUkuran(){
        $data = $this->db->get("tbl_ukuran")->result();

        return $data;
    }

    public function listAllbarang(){
       $this->db->select('a.barang_id,a.nama,a.harga,a.deskripsi,a.link,b.singkatan as ukuran,c.nama as warna,d.foto');
       $this->from('tbl_barang a');
       $this->db->join('tbl_warna b','a.ukuran_id=b.id');
       $this->db->join('tbl_warna c','a.warna_id=c.id');
       $this->db->join('tbl_barang_foto d','a.barang_id = d.barang_id');
       $this->db->where('deleted = 0');
       $data = $this->db->get()->result();
         return $data;
    }

    public function listAllwarna(){
        $data = $this->db->get("tbl_warna")->result();

        return $data;
    }

    public function listAlluser(){
        $data = $this->db->get("tbl_admin")->result();

        return $data;
    }

    public function listAllkategori(){
        $data = $this->db->get("tbl_kategori")->result();

        return $data;
    }
    // 
    public function listUkuranById($id)
    {
        $data = $this->db->get_where('tbl_ukuran',array('ukuran_id'=>$id))->row();
        return $data;
    }

    public function listWarnaById($id)
    {
        $data = $this->db->get_where('tbl_warna',array('warna_id'=>$id))->row();
        return $data;
    }

    public function listKategoriById($id)
    {
        $data = $this->db->get_where('tbl_kategori',array('kategori_id'=>$id))->row();
        return $data;
    }

    public function listBarangById($id)
    {
        $data = $this->db->get_where('tbl_barang',array('barang_id'=>$id))->row();
        return $data;
    }

    public function listUserById($id)
    {
        $data = $this->db->get_where('tbl_admin',array('admin_id'=>$id))->row();
        return $data;
    }

    // 
    public function insertUkuran($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->set('singkatan',$data['singkatan']);
        $this->db->set('deleted','0');
        $this->db->set('create_at',$data['now']);
        $this->db->set('create_by',$data['create_by']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $data = $this->db->insert('tbl_ukuran');

        return $data;
    }

    public function insertWarna($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->set('deleted','0');
        $this->db->set('create_at',$data['now']);
        $this->db->set('create_by',$data['create_by']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $data = $this->db->insert('tbl_warna');

        return $data;
    }

    public function insertKategori($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->set('ukuran',$data['opsi']);
        $this->db->set('deleted','0');
        $this->db->set('create_at',$data['now']);
        $this->db->set('create_by',$data['create_by']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $data = $this->db->insert('tbl_kategori');

        return $data;
    }
    
    public function insertUser($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->set('username',$data['username']);
        $this->db->set('email',$data['email']);
        $this->db->set('password',$data['password']);
        $this->db->set('keterangan',$data['keterangan']);
        $this->db->set('deleted','0');
        $this->db->set('create_at',$data['now']);
        $this->db->set('create_by',$data['create_by']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $data = $this->db->insert('tbl_admin');

        return $data;
    }
}

/* End of file Model_dashboard.php */
/* Location: ./application/models/Model_dashboard.php */