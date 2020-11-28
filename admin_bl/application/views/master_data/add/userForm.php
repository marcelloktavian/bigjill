
<div class="container-fluid" id="container-wrapper">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data User</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Data Master</li>
                  <li class="breadcrumb-item"><a href="ukuran.html">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                </ol>
              </div>

              <!-- Row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="col-12">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-default">Tambah Data User</h6>
                        <a href="<?= site_url('Master_Data/user') ?>" type="button" class="btn btn-info"><i class="fas fa-arrow-left"> Back</i></a>
                      </div>
                      <div class="card-body">
                      <!-- Alert jika gagal insert -->
                      <?php if ($this->session->flashdata('insertUser') == 'failed'): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                          <span>Gagal Memasukan Data</span>
                        </div>
                      <?php endif; ?>

                      <?php if ($this->session->flashdata('insertUser') == 'berhasil'): ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
                          <span>Berhasil Memasukan Data</span>
                        </div>
                      <?php endif; ?>
                  <!--  -->
                        <form method="POST" action="<?= site_url('Master_Data/addUser') ?>">
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name='nama' id="nama" aria-describedby="nama"
                            placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" name='username' id="username" aria-describedby="username"
                            placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name='email' id="email" aria-describedby="email"
                            placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" name='password' id="password" aria-describedby="password"
                            placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="kpass">konfirmasi password</label>
                            <input type="password" class="form-control" name='kpass' id="kpass" aria-describedby="konfirmasi password"
                            placeholder="Konfirmasi Password">
                          </div>
                          <div class="form-group">
                            <label for="Keterangan">keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan" aria-describedby="keterangan" cols="30" rows="5"></textarea>
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
            <script>
                
            </script>