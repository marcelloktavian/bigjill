				<?php 

				$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

				$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
				$url_count = $this->uri->total_segments();
				$edit = $this->uri->segment($url_count-1);
				?>

				<!-- nav -->
				<nav class="py-4">
					<div id="logo">
						<h1> <a href="<?php echo site_url('/'); ?>"><span class="fa fa-bold" aria-hidden="true"></span>igJill</a></h1>
					</div>

					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li class="<?php if($url == site_url('/')){echo "active";} ?>"><a href="<?php echo site_url('/'); ?>">Home</a></li>
						<li class="<?php if($url == site_url('/about')){echo "active";} ?>"><a href="<?php echo site_url('/about'); ?>">About</a></li>
						<li class="<?php if($url == site_url('/contact')){echo "active";} ?>"><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
					</ul>
				</nav>
				<!-- //nav -->