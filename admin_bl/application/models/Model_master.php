<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_Model {
    /*
	public	$propose   	  = '';
	public	$unpaid   	  = '';
	*/
	public function listAllUkuran(){
        $data = $this->db->from('tbl_ukuran')->where(array('deleted' => '0'))->order_by('nama', 'asc')->get()->result();

        return $data;
    }

    public function listAllbarang(){
       $this->db->select('a.barang_id,a.nama,a.harga,a.deskripsi,a.link,b.singkatan as ukuran,c.nama as warna,d.foto_utama');
       $this->db->from('tbl_barang a');
       $this->db->join('tbl_ukuran b','a.ukuran_id=b.ukuran_id');
       $this->db->join('tbl_warna c','a.warna_id=c.warna_id');
       $this->db->join('tbl_barang_foto d','a.barang_id = d.barang_id');
       $this->db->where(array('a.deleted' => '0', 'b.deleted' => '0', 'c.deleted' => '0'));
       $this->db->order_by('a.nama', 'asc');

       $data = $this->db->get()->result();
         return $data;
    }

    public function listAllwarna(){
        $data = $this->db->from('tbl_warna')->where(array('deleted' => '0'))->order_by('nama', 'asc')->get()->result();

        return $data;
    }

    public function listAlluser(){
        $data = $this->db->from('tbl_admin')->where(array('deleted' => '0'))->get()->result();

        return $data;
    }

    public function listAllkategori(){
        $data = $this->db->from('tbl_kategori')->where(array('deleted' => '0'))->order_by('nama', 'asc')->get()->result();

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
    //
    public function deleteData($where, $table, $data)
    {   
        $this->db->set('deleted','1');
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['update_by']);
        $this->db->set('lastmodified',$data['now']);

        $this->db->where($where);
        $data = $this->db->update($table);
        
        return $data;
    }
}

/* End of file Model_dashboard.php */
/* Location: ./application/models/Model_dashboard.php */