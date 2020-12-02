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

    // 

    public function updateWarna($data)
    {   
        $this->db->set('nama',$data['nama']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $this->db->where('warna_id',$data['warna_id']);
        $data = $this->db->update('tbl_warna');

        return $data;
    }

    public function updateUkuran($data)
    {   
        $this->db->set('nama',$data['nama']);
        $this->db->set('singkatan',$data['singkatan']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $this->db->where('ukuran_id',$data['ukuran_id']);
        $data = $this->db->update('tbl_ukuran');

        return $data;
    }

    public function updateKategori($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->set('ukuran',$data['opsi']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $this->db->where('kategori_id',$data['kategori_id']);
        $data = $this->db->update('tbl_kategori');

        return $data;
    }

    public function updateUser($data)
    {
        $this->db->set('nama',$data['nama']);
        $this->db->set('username',$data['username']);
        $this->db->set('email',$data['email']);
        if ($data['password']!='') {
            $this->db->set('password',$data['password']);
        }
        $this->db->set('keterangan',$data['keterangan']);
        $this->db->set('update_at',$data['now']);
        $this->db->set('update_by',$data['create_by']);
        $this->db->set('lastmodified',$data['now']);
        $this->db->where('admin_id',$data['admin_id']);
        $data = $this->db->update('tbl_admin');

        return $data;
    }

    //

    public function validasiInsertWarna($data)
    {
        $query = $this->db->query("SELECT * FROM tbl_warna WHERE nama='".$data['nama']."' AND deleted=0");
        $row = $query->num_rows();
        
        return $row;
    }

    public function validasiInsertUkuran($data, $input)
    {
        if ($input=='nama') {
            $query = $this->db->query("SELECT * FROM tbl_ukuran WHERE nama='".$data['nama']."' AND deleted=0");
            $row = $query->num_rows();
        } else if ($input=='singkatan') {
            $query = $this->db->query("SELECT * FROM tbl_ukuran WHERE singkatan='".$data['singkatan']."' AND deleted=0");
            $row = $query->num_rows();
        }
        
        return $row;
    }

    public function validasiInsertKategori($data)
    {
        $query = $this->db->query("SELECT * FROM tbl_kategori WHERE nama='".$data['nama']."' AND deleted=0");
        $row = $query->num_rows();
        
        return $row;
    }

    public function validasiInsertUser($data, $input)
    { 
        if ($input=='username') {
            $query = $this->db->query("SELECT * FROM tbl_admin WHERE username='".$data['username']."' AND deleted=0");
            $row = $query->num_rows();
        } else if ($input=='email') {
            $query = $this->db->query("SELECT * FROM tbl_admin WHERE email='".$data['email']."' AND deleted=0");
            $row = $query->num_rows();
        }
        
        return $row;
    }

    //

    public function validasiUpdateWarna($data)
    {
        $query = $this->db->query("SELECT * FROM tbl_warna WHERE nama='".$data['nama']."' AND warna_id NOT IN('".$data['warna_id']."') AND deleted=0");
        $row = $query->num_rows();
        
        return $row;
    }

    public function validasiUpdateUkuran($data, $input)
    {
        if ($input=='nama') {
            $query = $this->db->query("SELECT * FROM tbl_ukuran WHERE nama='".$data['nama']."' AND ukuran_id NOT IN('".$data['ukuran_id']."') AND deleted=0");
            $row = $query->num_rows();
        } else if ($input=='singkatan') {
            $query = $this->db->query("SELECT * FROM tbl_ukuran WHERE singkatan='".$data['singkatan']."' AND ukuran_id NOT IN('".$data['ukuran_id']."') AND deleted=0");
            $row = $query->num_rows();
        }
        
        return $row;
    }

    public function validasiUpdateKategori($data)
    {
       $query = $this->db->query("SELECT * FROM tbl_kategori WHERE nama='".$data['nama']."' AND kategori_id NOT IN('".$data['kategori_id']."') AND deleted=0");
        $row = $query->num_rows();
        
        return $row;
    }

    public function validasiUpdateUser($data, $input)
    {
        if ($input=='username') {
            $query = $this->db->query("SELECT * FROM tbl_admin WHERE username='".$data['username']."' AND admin_id NOT IN('".$data['admin_id']."')  AND deleted=0");
            $row = $query->num_rows();
        } else if ($input=='email') {
            $query = $this->db->query("SELECT * FROM tbl_admin WHERE email='".$data['email']."' AND admin_id NOT IN('".$data['admin_id']."')  AND deleted=0");
            $row = $query->num_rows();
        }
        
        return $row;
    }
}

/* End of file Model_dashboard.php */
/* Location: ./application/models/Model_dashboard.php */