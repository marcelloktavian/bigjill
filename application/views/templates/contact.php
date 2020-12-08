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
				<div class="col-md-6 contact-right-content">
					<form action="<?php echo site_url('/contact/kirimEmail'); ?>" method="post">
						<input type="text" name="nama" id="nama" placeholder="Nama Pengirim" required>
						<input type="email" class="email" name="email" id="email" placeholder="Email" required>
						<input type="text" name="telp" name="telp" placeholder="No Telepon" required>
						<textarea name="pesan" id="pesan" placeholder="Pesan" required></textarea>
						<div class="read mt-3">
							<input type="submit" value="Submit">
						</div>
					</form>
				</div>
				<div class="col-md-6 contact-left-content">
					<div class="address-con">
						<h4 class="mb-2"><span class="fa fa-phone-square" aria-hidden="true"></span> Phone</h4>
						<p>+62 812-2233-4054</p>
					</div>
					<div class="address-con my-4">
						<h4 class="mb-2"><span class="fa fa-envelope-o" aria-hidden="true"></span> Email </h4>
						<p><a href="mailto:bigjill.indonesia@gmail.com" target="_blank">bigjill.indonesia@gmail.com</a></p>
					</div>
					<div class="address-con mb-4">
						<h4 class="mb-2"><span class="fa fa-whatsapp" aria-hidden="true"></span> Whatsapp</h4>

						<p><a href="https://api.whatsapp.com/send?phone=6281222334054&fbclid=IwAR113_4-tRy1_uNzxfIcU_eqHc4krvdpCrZaTWkl9ZJiIrwf4OfeRX-V4fE" target="_blank">+62 812-2233-4054</a></p>
					</div>
					<div class="address-con">
						<h4 class="mb-2"><span class="fa fa-map-marker" aria-hidden="true"></span> Location </h4>

						<p><a href="https://www.google.com/maps/place/Jl.+Ciguriang+No.21,+Balonggede,+Kec.+Regol,+Kota+Bandung,+Jawa+Barat+40251/@-6.92439,107.6046988,17z/data=!4m5!3m4!1s0x2e68e626b88dcd51:0xe819c67d05a7af80!8m2!3d-6.9244833!4d107.6047357" target="_blank">Jl. Ciguriang No.21, Balonggede, Kec. Regol, Kota Bandung, Jawa Barat 40251</a></p>
					</div>

				</div>

			</div>
		</div>
	</section>

	<?php echo $this->load->view($footer); ?>

	<?php if ($this->session->flashdata('email') == 'berhasil'): ?>
		<script>
			// alert('Berhasil');
		</script>
	<?php endif; ?>

</body>

</html>
