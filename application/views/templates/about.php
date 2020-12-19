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
						<p class="mb-4 text-center px-lg-4"> Everyone wants to look beautiful, attractive, and cool all the time. Clothes and bags are an important factor in appearance. 
							No need to wear expensive clothes, the important things are convenient and simple. BigJill collections can help you to always be cool. 
						Colorful basic shirts, tops, pants, and bags, all made from good quality materials. We promise, when you use our collection, you will feel comfortable, and certainly cool</p>
					</div>
				</div>
			</section>
		</div>
	</section>
	<!-- //ab -->

	<?php echo $this->load->view($footer); ?>

</body>

</html>
