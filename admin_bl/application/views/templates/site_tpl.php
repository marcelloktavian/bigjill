<?php 
if (!$this->session->has_userdata('admin')){
	redirect('site');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="BigJill Admin">
	<meta name="author" content="Aditya" />
	<meta name="author" content="Marcellino" />

	<link href="<?php echo base_url('/assets/img/logo/logo.png'); ?>" rel="icon">
	<title>BigJill Official</title>
	<link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/css/ruang-admin.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-select/css/bootstrap-select.min.css'); ?>">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css'/>
	<link rel="stylesheet" href="<?= base_url('/assets/css/custom.css') ?>" >

	<script src="<?php echo base_url('/assets/sweetalert/sweetalert2.all.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/bootstrap-select/js/bootstrap-select.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/dropzone/dist/min/dropzone.min.js'); ?>"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>

</head>
<style>
	.btn-info {
		color: #fff;
		background-color: #AE8E7F;
		border-color: #AE8E7F;
	}

	.btn-info:hover,.btn-info:focus {
		color: #fff;
		background-color: #997361;
		border-color: #997361;
	}

	.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
	.show > .btn-info.dropdown-toggle {
		color: #fff;
		background-color: #997361;
		border-color: #997361;
	}

	.btn-danger {
		color: #fff;
		background-color: #AE594D;
		border-color: #AE594D;
	}

	.btn-danger:hover {
		color: #fff;
		background-color: #BF796F;
		border-color: #BF796F;
	}

	.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
	.show > .btn-danger.dropdown-toggle {
		color: #fff;
		background-color: #BF796F;
		border-color: #BF796F;
	}

	.btn-warning {
		color: #fff;
		background-color: #D69D69;
		border-color: #D69D69;
	}

	.btn-warning:hover {
		color: #fff;
		background-color: #CB8341;
		border-color: #CB8341;
	}

	.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
	.show > .btn-warning.dropdown-toggle {
		color: #fff;
		background-color: #CB8341;
		border-color: #CB8341;
	}

	.btn-success {
		color: #fff;
		background-color: #175760;
		border-color: #175760;
	}

	.btn-success:hover {
		color: #fff;
		background-color: #217C89;
		border-color: #217C89;
	}

	.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
	.show > .btn-success.dropdown-toggle {
		color: #fff;
		background-color: #217C89;
		border-color:#217C89;
	}
	
	.page-item.active .page-link {
		z-index: 1;
		color: #fff;
		background-color: #A38871;
		border-color: #A38871;
	}

	.page-item .page-link {
		z-index: 1;
		color: #896F58;
		background-color: #fff;
		border-color: #fff;
	}

	.form-control:focus {
		color: #495057;
		background-color: #fff;
		border-color: #AE8E7F;
		outline: 0;
		box-shadow: 0 0 0 0.2rem rgba(226, 222, 219, 255);
	}

	.sidebar.toggled .nav-item .collapse .collapse-inner .collapse-item.active,
	.sidebar.toggled .nav-item .collapsing .collapse-inner .collapse-item.active {
		color: #A38871;
		font-weight: 800;
	}
</style>
<body id="page-top">
	<div id="wrapper">
		
		<?php echo $this->load->view($left_content); ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				
				<?php echo $this->load->view($header); ?>

				<?php echo $this->load->view($content); ?>

			</div>

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; <script> document.write(new Date().getFullYear()); </script> - BigJill Official - Design
							<b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
						</span>
					</div>
				</div>
			</footer>
			<!-- End Footer -->

		</div>
	</div>
	<script src="<?php echo base_url('/assets/js/ruang-admin.min.js'); ?>"></script>

	<script>
		$(document).ready(function () {
			$('#dataTableHover').DataTable();
		});

		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});

		function logout() {
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to logout?',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, logout!'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = "<?php echo base_url('/site/logout'); ?>";
				}
			})
		}


		$('.deleteUkuran').on('click', function() {
			var id =  $(this).data('id');
			var nama =  $(this).data('nama');
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to delete '+nama+'?',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = ("<?= site_url('Master_Data/hapusUkuran/') ?>" + id);
				}
			})
		});

		$('.deleteWarna').on('click', function() {
			var id =  $(this).data('id');
			var nama =  $(this).data('nama');
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to delete '+nama+'?',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = ("<?= site_url('Master_Data/hapusWarna/') ?>" + id);
				}
			})
		});

		$('.deleteKategori').on('click', function() {
			var id =  $(this).data('id');
			var nama =  $(this).data('nama');
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to delete '+nama+'?',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = ("<?= site_url('Master_Data/hapusKategori/') ?>" + id);
				}
			})
		});

		$('.deleteUser').on('click', function() {
			var id =  $(this).data('id');
			var nama =  $(this).data('nama');
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to delete '+nama+'?',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = ("<?= site_url('Master_Data/hapusUser/') ?>" + id);
				}
			})
		});

		$('.deleteBarang').on('click', function() {
			var id =  $(this).data('id');
			var nama =  $(this).data('nama');
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to delete '+nama+'?',
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = ("<?= site_url('Master_Data/hapusBarang/') ?>" + id);
				}
			})
		});


		var ukurannya = [];
		var warnanya = [];

		function delete_ukuran(size) {
			var fixsize = size.split(';');
			const index = ukurannya.indexOf(fixsize[0]);
			if (index > -1) {
				ukurannya.splice(index, 1);
				console.log(ukurannya);
				$("#hiddenUkuran").val(ukurannya);
			}
		}

		function delete_ukuran_edit(size) {
			console.log(size);
			console.log(ukuranya);
			const index = ukurannya.indexOf(size);
			if (index > -1) {
				ukurannya.splice(index, 1);
				console.log(ukurannya);
				$("#hiddenUkuran").val(ukurannya);
			}
		}

		$(".addUkuranBtn").on('click', function () {
			var ukuran = $('#ukuranop').val()+';'+$('#ukuranop option:selected').text();
			var validasi = 'T';
			//pengecekan ukuran
			for (var i = 0; i < ukurannya.length; i++) {
				if (ukurannya[i]==ukuran) {
					validasi='Y';
				}
			}
			if (validasi=='T') {
			//lanjut menampilkan

			//push ukuran ke array
			ukurannya.push($('#ukuranop').val());
			$("#hiddenUkuran").val(ukurannya);
				// console.log(ukuran);
			//bikin html untuk chipnya
			var html = '';
			html += '<div class="chip">';
			html += ukuran.split(';')[1];
			html += '<span class="closebtn" onclick = "';
			html += "this.parentElement.style.display='none'; ";
			html += "delete_ukuran('";
			html += ukuran;
			html += "')";
			html += '"">×</span></div>';

			// console.log(html);

			//menampilkan chip ke daftar
			$('#daftarUkuran').append(html);
		} else {
			//tampil pesan
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Size Sudah Ditambahkan!',
			})
		}
	});

		function delete_warna(warna) {
			var fixwarna = warna.split(';');
			const index = warnanya.indexOf(fixwarna[0]);
			if (index > -1) {
				warnanya.splice(index, 1);
				$("#hiddenWarna").val(warnanya);
			}
		}

		$(".addWarnaBtn").on('click', function () {
			var warna = $('#warnaop').val()+';'+$('#warnaop option:selected').text();
			var validasi = 'T';
			//pengecekan ukuran
			for (var i = 0; i < warnanya.length; i++) {
				if (warnanya[i]==warna) {
					validasi='Y';
				}
			}
			if (validasi=='T') {
			//lanjut menampilkan
			
			//push ukuran ke array
			warnanya.push($('#warnaop').val());
			$("#hiddenWarna").val(warnanya);

			//bikin html untuk chipnya
			var html = '';
			html += '<div class="chip">';
			html += warna.split(';')[1];
			html += '<span class="closebtn" onclick = "';
			html += "this.parentElement.style.display='none'; ";
			html += "delete_warna('";
			html += warna;
			html += "')";
			html += '"">×</span></div>';

			// console.log(html);

			//menampilkan chip ke daftar
			$('#daftarWarna').append(html);
		} else {
			//tampil pesan
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Warna Sudah Ditambahkan!',
			})
		}
	});

</script>
</body>
</html>