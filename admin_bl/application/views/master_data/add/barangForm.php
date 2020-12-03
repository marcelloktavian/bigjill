<style>
  .dropzone {
    height: 170px;
    border: 2px solid rgba(0, 0, 0, 0.3);
    background: white;
    padding: 0px 0px; 
  }
  .dropzone.dz-clickable {
    cursor: pointer; 
  }
  .dropzone.dz-clickable * {
    cursor: default; 
  }
  .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
    cursor: pointer; 
  }
  .dropzone.dz-started .dz-message {
    display: none; 
  }
  .dropzone.dz-drag-hover {
    border-style: solid; 
  }
  .dropzone.dz-drag-hover .dz-message {
    opacity: 0.5; 
  }
  .dropzone .dz-message {
    text-align: center;
    margin: 2em 0; 
  }
  .dropzone .dz-message .dz-button {
    background: none;
    color: inherit;
    border: none;
    padding: 0;
    font: inherit;
    cursor: pointer;
    outline: inherit; 
  }
  .dropzone .dz-preview {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 16px;
    min-height: 100px; 
  }
  .dropzone .dz-preview:hover {
    z-index: 1000; 
  }
  .dropzone .dz-preview:hover .dz-details {
    opacity: 1; 
  }
  .dropzone .dz-preview.dz-file-preview .dz-image {
    border-radius: 20px;
    background: #999;
    background: linear-gradient(to bottom, #eee, #ddd); 
  }
  .dropzone .dz-preview.dz-file-preview .dz-details {
    opacity: 1; 
  }
  .dropzone .dz-preview.dz-image-preview {
    background: white; 
  }
  .dropzone .dz-preview.dz-image-preview .dz-details {
    -webkit-transition: opacity 0.2s linear;
    -moz-transition: opacity 0.2s linear;
    -ms-transition: opacity 0.2s linear;
    -o-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear; 
  }
  .dropzone .dz-preview .dz-remove {
    font-size: 14px;
    text-align: center;
    display: block;
    cursor: pointer;
    border: none; 
  }
  .dropzone .dz-preview .dz-remove:hover {
    text-decoration: underline; 
  }
  .dropzone .dz-preview:hover .dz-details {
    opacity: 1; 
  }
  .dropzone .dz-preview .dz-details {
    z-index: 20;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    font-size: 13px;
    min-width: 100%;
    max-width: 100%;
    padding: 2em 1em;
    text-align: center;
    color: rgba(0, 0, 0, 0.9);
    line-height: 150%; }
    .dropzone .dz-preview .dz-details .dz-size {
      margin-bottom: 1em;
      font-size: 16px; 
    }
    .dropzone .dz-preview .dz-details .dz-filename {
      white-space: nowrap; 
    }
    .dropzone .dz-preview .dz-details .dz-filename:hover span {
      border: 1px solid rgba(200, 200, 200, 0.8);
      background-color: rgba(255, 255, 255, 0.8); 
    }
    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
      overflow: hidden;
      text-overflow: ellipsis; 
    }
    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
      border: 1px solid transparent; 
    }
    .dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
      background-color: rgba(255, 255, 255, 0.4);
      padding: 0 0.4em;
      border-radius: 3px; 
    }
    .dropzone .dz-preview:hover .dz-image img {
      -webkit-transform: scale(1.05, 1.05);
      -moz-transform: scale(1.05, 1.05);
      -ms-transform: scale(1.05, 1.05);
      -o-transform: scale(1.05, 1.05);
      transform: scale(1.05, 1.05);
      -webkit-filter: blur(8px);
      filter: blur(8px); 
    }
    .dropzone .dz-preview .dz-image {
      border-radius: 20px;
      overflow: hidden;
      width: 120px;
      height: 120px;
      position: relative;
      display: block;
      z-index: 10; 
    }
    .dropzone .dz-preview .dz-image img {
      display: block; 
    }
    .dropzone .dz-preview.dz-success .dz-success-mark {
      -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); 
    }
    .dropzone .dz-preview.dz-error .dz-error-mark {
      opacity: 1;
      -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); 
    }
    .dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
      pointer-events: none;
      opacity: 0;
      z-index: 500;
      position: absolute;
      display: block;
      top: 50%;
      left: 50%;
      margin-left: -27px;
      margin-top: -27px; 
    }
    .dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
      display: block;
      width: 54px;
      height: 54px; 
    }
    .dropzone .dz-preview.dz-processing .dz-progress {
      opacity: 1;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear; 
    }
    .dropzone .dz-preview.dz-complete .dz-progress {
      opacity: 0;
      -webkit-transition: opacity 0.4s ease-in;
      -moz-transition: opacity 0.4s ease-in;
      -ms-transition: opacity 0.4s ease-in;
      -o-transition: opacity 0.4s ease-in;
      transition: opacity 0.4s ease-in; 
    }
    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
      -webkit-animation: pulse 6s ease infinite;
      -moz-animation: pulse 6s ease infinite;
      -ms-animation: pulse 6s ease infinite;
      -o-animation: pulse 6s ease infinite;
      animation: pulse 6s ease infinite; 
    }
    .dropzone .dz-preview .dz-progress {
      opacity: 1;
      z-index: 1000;
      pointer-events: none;
      position: absolute;
      height: 16px;
      left: 50%;
      top: 50%;
      margin-top: -8px;
      width: 80px;
      margin-left: -40px;
      background: rgba(255, 255, 255, 0.9);
      -webkit-transform: scale(1);
      border-radius: 8px;
      overflow: hidden; 
    }
    .dropzone .dz-preview .dz-progress .dz-upload {
      background: #333;
      background: linear-gradient(to bottom, #666, #444);
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      width: 0;
      -webkit-transition: width 300ms ease-in-out;
      -moz-transition: width 300ms ease-in-out;
      -ms-transition: width 300ms ease-in-out;
      -o-transition: width 300ms ease-in-out;
      transition: width 300ms ease-in-out; 
    }
    .dropzone .dz-preview.dz-error .dz-error-message {
      display: block; 
    }
    .dropzone .dz-preview.dz-error:hover .dz-error-message {
      opacity: 1;
      pointer-events: auto; 
    }
    .dropzone .dz-preview .dz-error-message {
      pointer-events: none;
      z-index: 1000;
      position: absolute;
      display: block;
      display: none;
      opacity: 0;
      -webkit-transition: opacity 0.3s ease;
      -moz-transition: opacity 0.3s ease;
      -ms-transition: opacity 0.3s ease;
      -o-transition: opacity 0.3s ease;
      transition: opacity 0.3s ease;
      border-radius: 8px;
      font-size: 13px;
      top: 130px;
      left: -10px;
      width: 140px;
      background: #be2626;
      background: linear-gradient(to bottom, #be2626, #a92222);
      padding: 0.5em 1.2em;
      color: white; 
    }
    .dropzone .dz-preview .dz-error-message:after {
      content: '';
      position: absolute;
      top: -6px;
      left: 64px;
      width: 0;
      height: 0;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      border-bottom: 6px solid #be2626; 
    }
    #dropzone {
      margin-bottom: 3rem; 
    }

    .dropzone {
      border: 2px dashed #0087F7;
      border-radius: 5px;
      background: white; 
    }
    .dropzone .dz-message {
      font-weight: 400; 
    }
    .dropzone .dz-message .note {
      font-size: 0.8em;
      font-weight: 200;
      display: block;
      margin-top: 1.4rem; 
    }

  </style>
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
              <?php if ($this->session->flashdata('insertBarang') == 'failed'): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                  <span>Gagal Memasukan Data</span>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('insertBarang') == 'berhasil'): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                  <span>Berhasil Memasukan Data</span>
                </div>
              <?php endif; ?>

              <?php if (($this->session->flashdata('insertBarang') != 'failed') && ($this->session->flashdata('insertBarang') != 'berhasil') && $this->session->flashdata('insertBarang') != NULL):
              $error = $this->session->flashdata('insertBarang');
              for ($i=0; $i < count($error); $i++) { 

                if ($error[$i]=='nama') {
                  ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                    <span>Nama Barang Sudah Ada</span>
                  </div>
                  <?php
                } 
              } endif;  ?>
              <!--  -->
              <form method="POST" action="<?= site_url('Master_Data/addBarang') ?>">

                <div class="form-group">
                  <label for="nama">Nama Barang</label>
                  <input type="text" class="form-control" name='nama' id="nama" aria-describedby="nama"
                  placeholder="Nama Barang" maxlength="60" required autofocus>
                </div>

                <div class="form-group">
                  <label for="harga">Harga Barang</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="label-harga">Rp. </span>
                    </div>
                    <input type="number" class="form-control" name='harga' id="harga" aria-describedby="Harga Barang"
                    placeholder="Harga Barang" maxlength="25" aria-describedby="label-harga" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="link">Link Shopee</label>
                  <input type="url" class="form-control" name='link' id="link" aria-describedby="link"
                  placeholder="Link Shopee">
                </div>
                
                <div class="form-group">
                  <label for="kategoriop">Kategori</label>
                  <select id="kategoriop" class="form-control selectpicker" data-live-search="true" data-size="4" required>
                    <option value="" disabled selected>-- Pilih Kategori --</option>
                    <?php foreach ($listKategori as $lkat): ?>
                      <option value="<?= $lkat->kategori_id ?>"><?= $lkat->nama ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="ukuranop">Ukuran</label>
                  <div class="input-group">
                   <select id="ukuranop" class="form-control selectpicker" data-live-search="true" data-size="4" required>
                    <option value="" disabled selected>-- Pilih Ukuran --</option>
                    <?php foreach ($listUkuran as $lk): ?>
                      <option value="<?= $lk->ukuran_id ?>"><?= $lk->nama.' ('.$lk->singkatan.')' ?></option>
                    <?php endforeach; ?>
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text" style="cursor: pointer;"><a class="addUkuranBtn">Tambah</a></span>
                  </div>
                </div>
                <!-- <button class="btn-primary addUkuranBtn" >Tambah Ukuran</button> -->
                <div id="daftarUkuran" class="daftarUkuran"></div>
              </div>

              <div class="form-group">
                <label for="warnaop">Warna</label>
                <div class="input-group">
                  <select id="warnaop" class="form-control selectpicker" data-live-search="true" data-size="4" required>
                    <option value="" disabled selected>-- Pilih Warna --</option>
                    <?php foreach ($listWarna as $lw): ?>
                      <option value="<?= $lw->warna_id ?>"><?= $lw->nama ?></option>
                    <?php endforeach; ?>
                  </select>
                  <div class="input-group-append">
                    <span class="input-group-text" style="cursor: pointer;"><a class="addWarnaBtn">Tambah</a></span>
                  </div>
                </div>
                <div id="daftarWarna" class="daftarUkuran"></div>
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi Barang"></textarea>
              </div>

<!--             <div class="form-group">
              <label for="fileFoto">Foto</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileFoto">
                <label class="custom-file-label" for="fileFoto">Pilih Foto Barang</label>
              </div>
            </div> -->


            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>

          </form>

<!--           <div id="dropzone">
            <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

              <div class="dz-message needsclick">
                <button type="button" class="dz-button">Drop files here or click to upload.</button>
              </div>

            </form>
          </div> -->

        </div>
      </div>
    </div>
  </div>  
</div>
<!--Row-->
</div>
<!-- <script>
  Dropzone.autoDiscover = false;
  $(".dropzone").dropzone({
   addRemoveLinks: true,
   removedfile: function(file) {
     var name = file.name; 

     $.ajax({
       type: 'POST',
       url: 'upload.php',
       data: {name: name,request: 2},
       sucess: function(data){
        console.log('success: ' + data);
      }
    });
     var _ref;
     return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
   }
 });
</script> -->