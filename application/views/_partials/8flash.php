<!--  -->
<!-- BUAT SEMUA -->
<!-- BUAT SEMUA ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!-- BUAT SEMUA -->
<!--  -->

	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('success_edit')): ?>
		<div class="alert alert-success" role="alert">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil! </strong>
			<?php echo $this->session->flashdata('success_edit'); ?>
		</div>
	<?php endif; ?>

	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('dihapus')): ?>
		<div class="alert alert-danger" role="alert">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Terhapus! </strong>
			<?php echo $this->session->flashdata('dihapus'); ?>
		</div>
	<?php endif; ?>

	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('selamatdatang')): ?>
		<div class="alert alert-success">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Selamat Datang! </strong>
			<?php echo $this->session->flashdata('selamatdatang'); ?>
		</div>
	<?php endif; ?>

	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('success_simpan')): ?>
		<div class="alert alert-success">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil! </strong>
			<?php echo $this->session->flashdata('success_simpan'); ?>
		</div>
	<?php endif; ?>

	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('message_masuk')): ?>
		<div class="alert alert-danger">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Maaf, </strong>
			<?php echo $this->session->flashdata('message_masuk'); ?>
		</div>
	<?php endif; ?>
	
	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('message_maaf')): ?>
		<div class="alert alert-danger">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Maaf, </strong>
			<?php echo $this->session->flashdata('message_maaf'); ?>
		</div>
	<?php endif; ?>
	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('maaf')): ?>
		<div class="alert alert-danger">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Maaf, </strong>
			<?php echo $this->session->flashdata('maaf'); ?>
		</div>
	<?php endif; ?>
	
	<!-- berbagai macam badge ada disini -->
	<?php if ($this->session->flashdata('gak_jadi')): ?>
		<div class="alert alert-secondary">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Maaf, </strong>
			<?php echo $this->session->flashdata('gak_jadi'); ?>
		</div>
	<?php endif; ?>


<!--  -->
<!-- BUAT SEMUA -->
<!-- BUAT SEMUA ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!-- BUAT SEMUA -->
<!--  -->


	<!-- INI SALAH -->
	<!-- <?php if ($this->session->flashdata('success_simpanAA')): ?> -->
		<!-- <div class="alert alert-success"> -->
			<!-- <button class="close" data-dismiss="alert">x</button> -->
			<!-- <strong>Berhasil! </strong> -->
			<!-- <?php echo $this->session->flashdata('success_simpanAA'); ?> -->
		<!-- </div> -->
	<!-- <?php endif; ?> -->