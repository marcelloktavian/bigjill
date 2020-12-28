<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">

<?php echo $this->load->view($header); ?>

<style>
  .mySlides {display: none;}


  /* Slideshow container */
  .slideshow-container {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-size: cover;
    position: relative;
    height: 0em;
    z-index: -1;
  }


  /* The dots/bullets/indicators */
  .dot {
    transition: background-color 0.6s ease;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-size: cover;
    z-index: -1;
  }

  .slideimg{
    vertical-align: middle;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-size: cover;
    position: relative;
    height: 45em;
    z-index: -1;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 4s;
    animation-name: fade;
    animation-duration: 4s;
  }

  @-webkit-keyframes fade {
    from {opacity: 4} 
    to {opacity: 4}
  }

  @keyframes fade {
    from {opacity: 4} 
    to {opacity: 4}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }
</style>

<body>

    <!-- mian-content -->
    <div class="main-banner" id="home" style="z-index: 1;">

    <div class="slideshow-container">

      <div class="mySlides fade">
        <!-- <div class="numbertext">1 / 3</div> -->
        <img class="slideimg" src="<?php echo base_url('/admin_bl/assets/img/banner.jpg'); ?>" style="width:100%">
        <!-- <div class="text">Caption Text</div> -->
      </div>

      <div class="mySlides fade">
        <!-- <div class="numbertext">2 / 3</div> -->
        <img class="slideimg" src="<?php echo base_url('/admin_bl/assets/img/man.png'); ?>" style="width:100%">
        <!-- <div class="text">Caption Two</div> -->
      </div>

      <div class="mySlides fade">
        <!-- <div class="numbertext">3 / 3</div> -->
        <img class="slideimg" src="<?php echo base_url('/admin_bl/assets/img/banner3.jpg'); ?>" style="width:100%">
        <!-- <div class="text">Caption Three</div> -->
      </div>

    </div>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
  setTimeout(showSlides, "4000"); // Change image every 2 seconds
}
</script>
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
				<a href="#catalog" class="btn">Lihat Catalog</a>
			</div>
		</div>
		<!--// banner-inner -->
	</div>
	<!--//main-content-->

	

    <a name="catalog"><section class="ab-info-main py-md-3 py-3"></a>
    	<div class="container py-md-3"><br>
    		<h3 class="tittle text-center">PRODUCTS (<?= $barang ?>)</h3>
    		<!-- top Products -->
    		<div class="row">
    			<!-- product left -->
    			<div class="side-bar col-lg-3">

    				<div class="search-bar w3layouts-newsletter">
    					<h3 class="sear-head">Cari Barang</h3>
    					<span class="d-flex">
    						<input type="search" placeholder="Nama Barang" name="search" id="search" class="form-control" value="<?= $barang ?>" required>
    						<button class="button btn1" onclick="cari()"><span class="fa fa-search" aria-hidden="true"></span></button>
    					</form>
    				</div>
    				<!--preference -->
    				<br>
    				<div class="left-side my-3">
    					<h3 class="sear-head">Kategori</h3>
    					<ul class="w3layouts-box-list">
    						<?php 
    						foreach ($kategori as $d): ?>
    							<li>
    								<a href="<?php echo site_url('/search/kategori/');echo $d->kategori_id.'#catalog'; ?>">
    									<input type="radio" disabled>
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
    				<div class="left-ads-display col-lg-9 " >

    					<?php
    					$no = 0;
    					foreach ($daftar as $b) {
    						if ($no==0 || $no % 3 == 0) {
    							echo "<div class='row m-0'>";
    						}
    						?>

    						<div class="col-md-4" >
    							<div class="product-shoe-info shoe text-center">
    								<div class="men-thumb-item">
    									<a href="<?php echo site_url('/detail/');echo $b->barang_id; ?>"><img src="
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
    												<a href="<?php echo site_url('/detail/');echo $b->barang_id; ?>"><?= $b->nama ?></a>
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
					<!-- <nav aria-label="...">
					<ul class="pagination pagination-lg">
						<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">1</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
					</ul>
             </nav> -->
             <!-- <div class="row"> -->
              <!-- <div class="col"> -->
               <!--Tampilkan pagination-->
               <?php echo $pagination; ?>
               <!-- </div> -->
               <!-- </div> -->
           </section>
            <br>
           <?php echo $this->load->view($footer); ?>

</body>
</html>