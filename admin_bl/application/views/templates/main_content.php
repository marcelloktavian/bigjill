<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">

        <!-- Tanggal -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-2">Tanggal</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "".$notice->tanggal; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tanggal -->

        <!-- Total Warna -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Warna</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "".$notice->total_warna; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span><a href="<?php echo base_url('/master_data/warna'); ?>">Lebih Lengkap</a></span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-palette fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Total Warna -->

        <!-- Total Kategori -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Kategori</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo "".$notice->total_kategori; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span><a href="<?php echo base_url('/master_data/kategori'); ?>">Lebih Lengkap</a></span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Total Kategori -->

        <!-- Total Barang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "".$notice->total_barang; ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span><a href="<?php echo base_url('/master_data/barang'); ?>">Lebih Lengkap</a></span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tshirt fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Total Barang -->

    </div>
    <!--Row-->
</div>
 <!---Container Fluid-->