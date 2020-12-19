<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Warna</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item"><a href="<?= site_url('Master_Data/warna') ?>">Warna</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="col-12">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-default">Edit Data Warna</h6>
            <a href="<?= site_url('Master_Data/warna') ?>" type="button" class="btn btn-info"><i class="fas fa-arrow-left"> Back</i></a>
          </div>
          <div class="card-body">
            <!-- Alert jika gagal insert -->
            <?php if ($this->session->flashdata('updateWarna') == 'failed'): ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                <span>Gagal Mengubah Data</span>
              </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('updateWarna') == 'berhasil'): ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                <span>Berhasil Mengubah Data</span>
              </div>
            <?php endif; ?>

            <?php if (($this->session->flashdata('updateWarna') != 'failed') && ($this->session->flashdata('updateWarna') != 'berhasil') && $this->session->flashdata('updateWarna') != NULL):
            $error = $this->session->flashdata('updateWarna');
            for ($i=0; $i < count($error); $i++) { 

              if ($error[$i]=='nama') {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                  <span>Nama Warna Sudah Ada</span>
                </div>
                <?php
              } 
            } endif;  ?>
            <!--  -->
            <form method="POST" action="<?= site_url('Master_Data/editWarna') ?>">
              <input type="hidden" name='warna_id' id="warna_id" value="<?= $detail->warna_id ?>">
              <div class="form-group">
                <label for="nomor">Nomor WA</label>
                <input type="text" class="form-control" name='nomor' id="nomor" aria-describedby="nomor"
                placeholder="Nomor WA" maxlength="15" onkeypress="return event.charCode >= 48 && event.charCode <=57" required autofocus>
              </div>
              <div class="form-group">
                <label for="nomor">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Pesan WA" wrap="hard" required></textarea>
                <font color="red"><b>*</b></font> (<b>#nama</b> = nama barang, <b>#harga</b> = harga barang, <b>#kategori</b> = kategori barang)
              </div>

              <button type="submit" class="btn btn-success">Simpan</button>
              <button type="reset" class="btn btn-danger">Reset</button>

            </form>
          </div>
        </div>
      </div>
    </div>  
  </div>
  <!--Row-->
</div>