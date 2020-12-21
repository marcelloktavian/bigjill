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
	<div class="main-banner inner" id="home">
		<!-- header -->
		<header class="header">
			<div class="container-fluid px-lg-5">

				<?php echo $this->load->view($left_content); ?>

			</div>
		</header>
		<!-- //header -->

	</div>
	<!--//main-content-->
	<!---->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo site_url('/'); ?>">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact Us</li>
	</ol>
	<!---->
	<!--// mian-content -->
	<!-- banner -->
	<section class="ab-info-main py-5">
		<div class="container py-3">
			<h3 class="tittle text-center"><span class="sub-tittle">Find Us</span> Contact Us</h3>
			<div class="row contact-main-info mt-5">
				<!-- <div class="col-md-6 contact-right-content">
					<?= $this->session->flashdata('msg') ?>
					<form action="<?php echo site_url('/contact/kirimEmail'); ?>" method="post">
						<input type="text" name="nama" id="nama" placeholder="Nama Pengirim" required>
						<input type="email" class="email" name="email" id="email" placeholder="Email" required>
						<input type="text" name="telp" name="telp" placeholder="No Telepon" required>
						<textarea name="pesan" id="pesan" placeholder="Pesan" required></textarea>
						<div class="read mt-3">
							<input type="submit" value="Submit">
						</div>
					</form>
				</div> -->
				<div class="col-md-4 contact-left-content">
					<div class="address-con mb-4">
						<h4 class="mb-2"><span class="fa fa-whatsapp" aria-hidden="true"></span> Whatsapp</h4>
						<?php 
						foreach ($wa as $wa): ?>
							<p><a href="https://api.whatsapp.com/send?phone=<?= $wa->nomor ?>&fbclid=IwAR113_4-tRy1_uNzxfIcU_eqHc4krvdpCrZaTWkl9ZJiIrwf4OfeRX-V4fE" target="_blank"><?= $wa->display ?></a></p>
							<?php
						endforeach; ?>
						
					</div>

				</div>

				<div class="col-md-4 contact-left-content">
					<div class="address-con">
						<h4 class="mb-2"><span class="fa fa-map-marker" aria-hidden="true"></span> Location </h4>

						<?php 
						foreach ($email as $ml): ?>
							<p><a href="mailto:<?= $ml->email ?>" target="_blank"><?= $ml->email ?></a></p>
							<?php
						endforeach; ?>
						
					</div>

				</div>

				<div class="col-md-4 contact-left-content">
					<div class="address-con">
						<h4 class="mb-2"><span class="fa fa-envelope-o" aria-hidden="true"></span> Email </h4>

						<?php 
						foreach ($lokasi as $lk): ?>
							<p><a href="<?= $lk->url ?>" target="_blank"><?= $lk->nama ?></a></p>
							<?php
						endforeach; ?>
						
					</div>

				</div>

			</div>


		</div>
		
		<div class="col-md-12 contact-left-content">
			<div class="address-con">
				<h3 class="mb-2"><span class="fa fa-map-marker" aria-hidden="true"></span> Google Maps </h3>

				<div id="googleMap" style="width:100%;height:350px;"></div>

			</div>

		</div>
		
	</section>

	<script type="text/javascript">   
		var marker;
		function initialize(){

			var infoWindow = new google.maps.InfoWindow;

			var mapOptions = {
				mapTypeId: google.maps.MapTypeId.ROADMAP
			} 

			var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      

			var bounds = new google.maps.LatLngBounds();

			var maps1 ='<strong>Big Jill</strong><br><br>';
			maps1 += 'Kings Shopping Centre, <br>Jl. Kepatihan No.4, Balonggede, <br>Kec. Regol, Kota Bandung, <br>Jawa Barat 40251<br>';
			maps1 += "<a href='https://www.google.com/maps/dir//Big+Jill,+Kings+Shopping+Centre,+Jl.+Kepatihan+No.4,+Balonggede,+Kec.+Regol,+Kota+Bandung,+Jawa+Barat+40251/@-6.923346,107.5955643,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e68e6246ce9c979:0x5c67b7582be8fe8d!2m2!1d107.604319!2d-6.923346' target='_blank'>View on Google Maps</a>";

			var maps2 ='<strong>Big Jill</strong><br><br>';
			maps2 += 'Jl. Dewi Sartika No.11, Balonggede, <br>Kec. Regol, Kota Bandung, <br>Jawa Barat 40251<br>';
			maps2 += "<a href='https://www.google.com/maps/dir//BigJill,+Jl.+Dewi+Sartika+No.11,+Balonggede,+Kec.+Regol,+Kota+Bandung,+Jawa+Barat+40251/@-6.923346,107.5955643,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e68e6268692e901:0x4c1faf509fe2aeb6!2m2!1d107.6064514!2d-6.9236294' target='_blank'>View on Google Maps</a>";

			var maps3 ='<strong>Big Jill</strong><br><br>';
			maps3 += 'Bandung Indah Plaza, <br>Jl. Merdeka No.56, Citarum, <br>Kec. Bandung Wetan, Kota Bandung, <br>Jawa Barat 40117<br>';
			maps3 += "<a href='https://www.google.com/maps/dir//Big+Jill,+Bandung+Indah+Plaza,+Jl.+Merdeka+No.56,+Citarum,+Kec.+Bandung+Wetan,+Kota+Bandung,+Jawa+Barat+40117/@-6.908344,107.602497,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e68e637c28ce53d:0x19653cfa33e71afa!2m2!1d107.6112517!2d-6.908344' target='_blank'>View on Google Maps</a>";

			addMarker(-6.922728264535536, 107.60423316844289, maps1); 
			addMarker(-6.9224726496240505, 107.6066793428194, maps2);
			addMarker(-6.907598433420366, 107.61133752980268, maps3);

			function addMarker(lat, lng, info){
				var lokasi = new google.maps.LatLng(lat, lng);
				bounds.extend(lokasi);
				var marker = new google.maps.Marker({
					map: peta,
					animation: google.maps.Animation.BOUNCE,
					zoom: 10,
					position: lokasi
				});       
				peta.fitBounds(bounds);
				bindInfoWindow(marker, peta, infoWindow, info);
			}

			function bindInfoWindow(marker, peta, infoWindow, html){

				google.maps.event.addListener(marker, 'click', function() {
					infoWindow.setContent(html);
					infoWindow.open(peta, marker);
				});
			}
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwP1R4zBCxOIUkZDgYyIHvMcydiPfDkSw&callback=initialize"></script>
	<?php echo $this->load->view($footer); ?>

<!-- 	<?php if ($this->session->flashdata('email') == 'berhasil'): ?>
		<script>
			// alert('Berhasil');
		</script>
		<?php endif; ?> -->

	</body>

	</html>
