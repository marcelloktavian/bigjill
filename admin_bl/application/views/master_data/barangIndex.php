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
                  <th width="5%">No</th>
                  <th width="30%">Nama</th>
                  <th width="13%">Harga</th>
                  <th width="16%">Ukuran</th>
                  <th width="16%">Warna</th>
                  <th width="10%">Foto</th>
                  <th width="10%">Aksi</th>
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
                    <td><?php 
                    $ukuran = explode(';', $d->ukuran_id);
                    for ($i=0; $i < count($ukuran)-1; $i++) { 
                      if ($i==count($ukuran)-2) {
                        echo $ukuran[$i];
                      } else {
                        echo $ukuran[$i].', ';
                      }
                    }
                    ?></td>
                    <td><?php 
                    $warna = explode(';', $d->warna_id);
                    for ($i=0; $i < count($warna)-1; $i++) { 
                      if ($i==count($warna)-2) {
                        echo $warna[$i];
                      } else {
                        echo $warna[$i].', ';
                      }
                    }
                    ?></td>
                    <td><img src="<?php 
                    if($d->foto==null || $d->foto==''){
                        echo base_url('assets/img/null.png');
                     }else{
                        echo base_url('assets/img/barang/'.$d->foto);
                     }
                     ?>" width="125" height="150"></td>
                     <td>
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