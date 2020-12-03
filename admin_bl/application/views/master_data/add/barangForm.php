<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
      <li class="breadcrumb-item">Data Master</li>
      <li class="breadcrumb-item"><a href="<?= site_url('Master_Data/barang') ?>">Barang</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="col-12">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-default">Tambah Data Barang</h6>
            <a href="<?= site_url('Master_Data/barang') ?>" type="button" class="btn btn-info"><i class="fas fa-arrow-left"> Back</i></a>
          </div>
          <div class="card-body">
            <!-- Alert jika gagal insert -->
            <?php if ($this->session->flashdata('insertKategori') == 'failed'): ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                <span>Gagal Memasukan Data</span>
              </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('insertKategori') == 'berhasil'): ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                <span>Berhasil Memasukan Data</span>
              </div>
            <?php endif; ?>

            <?php if (($this->session->flashdata('insertKategori') != 'failed') && ($this->session->flashdata('insertKategori') != 'berhasil') && $this->session->flashdata('insertKategori') != NULL):
            $error = $this->session->flashdata('insertKategori');
            for ($i=0; $i < count($error); $i++) { 

              if ($error[$i]=='nama') {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                  <span>Nama Kategori Sudah Ada</span>
                </div>
                <?php
              } 
            } endif;  ?>
            <!--  -->
            <form method="POST" action="<?= site_url('Master_Data/addKategori') ?>">
              <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" name='nama' id="nama" aria-describedby="nama"
                placeholder="Nama Kategori" maxlength="25" required autofocus>
              </div>
              <div class="form-group">
                <label for="singkatan">Harga</label>
                <input type="number" class="form-control" name='harga' id="harga" aria-describedby="Harga Barang"
                placeholder="Harga Barang" maxlength="25" required>
              </div>
              <div class="form-group">
                <label for="singkatan">Ukuran</label>
                <select id="ukuranop" class="form-control" >
                  <option value="">-- Pilih Ukuran --</option>
                  <?php foreach ($listUkuran as $lk): ?>
                    <option value="<?= $lk->ukuran_id ?>"><?= $lk->nama.'('.$lk->singkatan.')' ?></option>
                  <?php endforeach; ?>
                </select>
                <button class="btn-primary addUkuranBtn" >Tambah Ukuran</button>
                <div id="daftarUkuran" class="daftarUkuran"></div>
              </div>
              <div class="form-group">
                <label for="singkatan">Harga</label>
                <input type="text" class="form-control" name='nama' id="nama" aria-describedby="nama"
                placeholder="Nama Kategori" maxlength="25" required>
              </div>
              <div class="form-group">
                <label for="singkatan">Harga</label>
                <input type="text" class="form-control" name='nama' id="nama" aria-describedby="nama"
                placeholder="Nama Kategori" maxlength="25" required>
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