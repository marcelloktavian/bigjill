<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">

<?php echo $this->load->view($header); ?>

<body>

	<!-- mian-content -->
	<div class="main-banner" id="home">
		<!-- header -->
		<header class="header">
			<div class="container-fluid px-lg-5">

				<?php echo $this->load->view($left_content); ?>

			</div>
		</header>
		<!-- //header -->

		<!--/banner-->
		<div class="banner-info">
			<h3 class="mb-4">BigJill Official</h3>
			<div class="ban-buttons">
				<a href="#catalog" class="btn">Catalog</a>
			</div>
		</div>
		<!--// banner-inner -->
	</div>
	<!--//main-content-->

	<!--/ab -->
    <!-- <section class="about py-md-5 py-5">
        <div class="container-fluid">
            <div class="feature-grids row px-3">
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-truck" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">Cumque autem ullam.</h3>
                            <p>On all order over $2000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row bottom-gd2-active">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">doloribus-esse-alias</h3>
                            <p>On 1st exchange in 30 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-gift" aria-hidden="true"></span></div>

                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">sunt reiciendis ad</h3>
                            <p>Register & save up to $29%</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-usd" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">PREMIUM SUPPORT</h3>
                            <p>Support 24 hours per day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //ab -->
    <!--/ab -->

    <a name="catalog"><section class="ab-info-main py-md-3 py-3"></a>
    	<div class="container py-md-3">
    		<h3 class="tittle text-center">PRODUCTS</h3>
    		<!-- top Products -->
    		<div class="row">
    			<!-- product left -->
    			<div class="side-bar col-lg-3">

    				<div class="search-bar w3layouts-newsletter">
    					<h3 class="sear-head">Cari Barang</h3>
    					<form action="<?php echo site_url('/search/barang/');?>" method="post" class="d-flex">
    						<input type="search" placeholder="Nama Barang" name="search" class="form-control" required>
    						<button class="btn1"><span class="fa fa-search" aria-hidden="true"></span></button>
    					</form>
    				</div>
    				<!--preference -->
    				<br>
    				<div class="left-side my-3">
    					<h3 class="sear-head">Kategori</h3>
    					<ul class="w3layouts-box-list">
    						<?php 
    						foreach ($daftar as $d): ?>
    							<li>
    								<a href="<?php echo site_url('/search/kategori/');echo $d->kategori_id; ?>">
    									<input type="checkbox" class="checked" checked disabled>
    									<span class="span"><?= $d->nama; ?></span></a>
    								</li>
    								<?php
    							endforeach; ?>

    						</ul>
    					</div>
    					<!-- // preference -->


    				</div>
    				<!-- //product left -->
    				<!-- product right -->
    				<div class="left-ads-display col-lg-9">

    					<?php
    					$no = 0;
    					foreach ($barang as $b) {
    						if ($no==0 || $no % 3 == 0) {
    							echo "<div class='row m-0'>";
    						}
    						?>

    						<div class="col-md-4">
    							<div class="product-shoe-info shoe text-center">
    								<div class="men-thumb-item">
    									<a href="<?php echo site_url('/search/barang/');echo $b->barang_id; ?>"><img src="
    										<?php
    										if($b->foto_utama==null || $b->foto_utama=='null.png'){
    											echo base_url('/admin_bl/assets/img/null.png');
    											}else{
    												echo base_url('/admin_bl/assets/img/barang/'); echo $b->foto_utama;
    											}
    											?>" class="img-fluid" alt=""></a>
    										</div>
    										<div class="item-info-product">
    											<h4>
    												<a href="<?php echo site_url('/search/barang/');echo $b->barang_id; ?>"><?= $b->nama ?></a>
    											</h4>

    											<div class="product_price">
    												<div class="grid-price">
    													<span class="money"><?= "Rp. " . number_format($b->harga,0,',','.'); ?></span>
    												</div>
    											</div>

    										</div>
    									</div>
    								</div>

    								<?php
    								$no = $no + 1;

    								if ($no==0 || $no % 3 == 0) {
    									echo "</div><br>";
    								}
    							}
    							?>
    							<br><br>
    						</div>
    					</div>
    				</div>
    			</section>

    			<?php echo $this->load->view($footer); ?>

    		</body>
    		</html>