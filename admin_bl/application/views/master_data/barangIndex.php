<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item active" aria-current="page">Barang</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- DataTable Ukuran -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="col-12">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-default">Data Barang</h6>
            <a href="<?= site_url('Master_Data/barangForm') ?>" type="button" class="btn btn-info"><i class="fas fa-plus"> Tambah</i></a>
          </div>
          <!-- Alert jika gagal delete -->
          <?php if ($this->session->flashdata('deleteBarang') == 'failed'): ?>
            <script>
              toastr.error('Gagal Menghapus Data','Berhasil',{"showDuration": "2000","closeButton": true,"timeOut": "5000"});
            </script>
          <?php endif; ?>

          <?php if ($this->session->flashdata('deleteBarang') == 'berhasil'): ?>
            <script>
              toastr.success('Berhasil Menghapus Data','Berhasil',{"showDuration": "2000","closeButton": true,"timeOut": "5000",});
            </script>
          <?php endif; ?>
          <!--  -->
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                  <th width="10%">No</th>
                  <th width="30%">Nama</th>
                  <th width="15%">Harga</th>
                  <th width="15%">Kategori</th>
                  <th width="10%">Foto</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($daftar as $d): ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $d->nama; ?></td>
                    <td><?= "Rp." . number_format($d->harga,0,',','.'); ?></td>
                    <td><?= $d->kategori ?></td>
                    <td><img src="<?php 
                    if($d->foto==null || $d->foto==''){
                      echo base_url('assets/img/null.png');
                      }else{
                        echo base_url('assets/img/barang/'.$d->foto);
                      }
                      ?>" width="125" height="150"></td>
                      <td>
                       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalBarang" data-placement="bottom" title="View Data"><i class="fas fa-eye"></i></button>
                       <a type="button" href="<?= site_url('Master_Data/editBarangForm/'.$d->barang_id) ?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="fas fa-edit"></i></a>
                       <button type="button" class="btn btn-danger deleteBarang" data-toggle="tooltip" data-placement="bottom" title="Delete Data" data-id="<?= $d->barang_id; ?>" data-nama="<?= $d->nama; ?>"><i class="fas fa-trash"></i></button>
                     </td>
                   </tr>
                   <?php
                   $no++;
                 endforeach; ?>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!--Row-->
 </div>
 <!---Container Fluid-->

 <!-- Modal -->
 <div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="modalBarangLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBarangLabel">Detail Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <table class="table table-hover table-bordered">
        <tbody>
          <tr>
            <td scope="row">Nama Barang</td>
            <td scope="row">Nama</td>
          </tr>
          <tr>
            <td scope="row">Harga Barang</td>
            <td scope="row"><?= "Rp." . number_format('1000000',0,',','.'); ?></td>
          </tr>
          <tr>
            <td scope="row">Kategori</td>
            <td scope="row">Bag</td>
          </tr>
          <tr>
            <td scope="row">Link Shopee</td>
            <td scope="row">https://</td>
          </tr>
          <tr>
            <td scope="row">Ukuran</td>
            <td scope="row">Ukurannya</td>
          </tr>
          <tr>
            <td scope="row">Warna</td>
            <td scope="row">Warnanya</td>
          </tr>
          <tr>
            <td scope="row">Deskripsi</td>
            <td scope="row">testing123</td>
          </tr>
          <tr>
            <td scope="row">Foto Utama</td>
            <td scope="row"><img src="<?php 
              echo base_url('assets/img/null.png');
              ?>" width="125" height="150"></td>
            </tr> 
          </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>