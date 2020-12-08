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
		<li class="breadcrumb-item active">About Us</li>
	</ol>
	<!---->
	<!--// mian-content -->
	<!--/ab -->

	<!-- //ab -->
	<!--/ab -->
	<section class="about py-md-5 py-5">
		<div class="container py-md-3">
			<section class="hand-crafted py-5">
				<div class="container">
					<div class="inner-sec py-md-5 px-lg-5">
						<h3 class="tittle text-center"><span class="sub-tittle">About.</span> Welcome To BigJill Website</h3>
						<p class="mb-4 text-center px-lg-4"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
					</div>
				</div>
			</section>
		</div>
	</section>
	<!-- //ab -->

	<?php echo $this->load->view($footer); ?>

</body>

</html>
