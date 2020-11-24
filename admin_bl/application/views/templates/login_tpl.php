<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Aditya" />
	<meta name="author" content="Marcellino" />

	<title>Login Admin BigJill</title>

	<link rel="icon" href="<?php echo base_url('/assets/images/logo.png'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style_login.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style_form.css'); ?>" />
	
	<script type="text/javascript" src="<?php echo base_url('/assets/plugins/jQuery_v1.11.2/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<div class="wrapper">
		<div id="formContent">
			<h2 class="active">Login System</h2>

			<!-- Alert jika gagal login -->
			<?php if ($this->session->flashdata('status') == 'failed'): ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
					<span>Username atau password salah!!</span>
				</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata('status') == 'berhasil'): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
					<span>Berhasil masuk!!</span>
				</div>
			<?php endif; ?>

			<!-- Form Login -->
			<form action="<?php echo base_url('/site/login'); ?>" method="post">
				<input type="text" id="username" name="username" placeholder="Username" required autofocus>
				<input type="password" id="password" name="password" placeholder="Password" required>
				<input type="submit" value="Log In">
			</form>
			<!-- End Form Login -->

		</div>
	</div>
</body>
</html>