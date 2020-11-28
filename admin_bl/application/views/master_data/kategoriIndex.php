<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Data Master</li>
                  <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
              </div>

              <!-- Row -->
              <div class="row">
                <!-- DataTable Ukuran -->
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="col-12">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-default">Data Kategori</h6>
                        <a href="<?= site_url('Master_Data/kategoriForm') ?>" type="button" class="btn btn-info"><i class="fas fa-plus"> Tambah</i></a>
                      </div>
                      <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                          <thead class="thead-light">
                            <tr>
                              <th width="5%">No</th>
                              <th width="40%">Nama</th>
                              <th width="20%">Ukuran</th>
                              <th width="15%">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                                $no =1;
                                foreach ($daftar as $d): ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $d->nama; ?></td>
                                    <td><?= $d->ukuran; ?></td>
                                    <td>
                                        <a type="button" href="edit2.html" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="fas fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete Data"><i class="fas fa-trash" onclick="hapus('2','Medium')"></i></button>
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