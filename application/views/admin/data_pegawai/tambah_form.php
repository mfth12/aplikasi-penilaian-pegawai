<!DOCTYPE html>
<html lang="en">
    
    <head>
        <!-- menggunakan partials 'head.php' -->
        <?php $this->load->view("_partials/1head.php") ?>
    </head>
    
    <body class="sb-nav-fixed">
        <!-- partial navbar -->
        <?php $this->load->view("_partials/2navbar.php") ?>
        <!-- selesai partial navbar -->
        
        
        <div id="layoutSidenav">
            <!-- partial side_navigation -->
            <?php $this->load->view("_partials/3sidenav.php") ?>

          
        <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
        <!-- gagal dipanggil yak -->
        <!--  -->
        <!-- mulai dari sini konten nya -->
        <div id="layoutSidenav_content">
        <main>
        <!-- masuk ke kontainer konten halaman -->
        
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4">Tambah Pegawai</h1>
            <!-- ini nama bread crumb -->
	        <?php $this->load->view("_partials/4breadcrumb.php") ?>
	        <!-- DataTables -->
            <div class="row">
                <div class="col-xl-8"><!-- cards -->
                <!-- tulisan untuk row data, bebas -->
                </div>
            </div>
	        <div class="container-fluid">
			

			<!-- ini untuk tulisan sukses, disini yaa -->
			<?php $this->load->view("_partials/8flash.php") ?>
			
			<div class="card mb-4">
							<div class="card-header">
								<a href="<?php echo site_url('admin/data_pegawai') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
							</div>
							<div class="card-body">
						
								<form action="<?php echo site_url('admin/data_pegawai/add') ?>" method="post" enctype="multipart/form-data" >
									

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="nik">NIPY *</span>
										</div>
										<label for="nik"></label>
										<input type="text" name="nik" class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>" placeholder="Nomer Induk Pegawai Yayasan">
										<div class="invalid-feedback">
											<?php echo form_error('nik') ?>
										</div>
									</div>


									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="role">Hak Akses *</label>
									  </div>
									  <select class="custom-select <?php echo form_error('role') ? 'is-invalid':'' ?>" name="role">
									    <option value="pegawai" selected>Pegawai</option>
									    <option value="kepsek">Kepala Sekolah</option>
									    <option value="admin">Pejabat Yayasan</option>
									  </select>
									  <div class="invalid-feedback">
											<?php echo form_error('role') ?>
										</div>
									</div>


									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="unit">Unit *</label>
									  </div>
									  <select class="custom-select <?php echo form_error('unit') ? 'is-invalid':'' ?>" name="unit">
									  	<?php foreach ($data_unit as $units): ?>
							                          <option value="<?php echo $units["unit"]; ?>"> <?php echo $units["unit"]; ?></option>
                                        <?php endforeach; ?>
										<!-- <option value="RA" selected>RA</option>
									    <option value="SDIT">SDIT</option>
									    <option value="SMPIT">SMPIT</option>
									    <option value="YAYASAN">YAYASAN</option> -->
									  </select>

									  <div class="invalid-feedback">
											<?php echo form_error('role') ?>
										</div>
									</div>
									
									<div class="row mb-3">
									<div class="input-group col-md-6 mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="pangkat_gol">Pangkat/Golongan</span>
											</div>
											<label for="pangkat_gol"></label>
											<input type="text" name="pangkat_gol" class="form-control <?php echo form_error('pangkat_gol') ? 'is-invalid':'' ?>" placeholder="Silakan diisi">
											<div class="invalid-feedback">
												<?php echo form_error('pangkat_gol') ?>
											</div>
										</div>
	
										<div class="input-group col mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="jabatan_pekerjaan">Jabatan/Pekerjaan</span>
											</div>
											<label for="jabatan_pekerjaan"></label>
											<input type="text" name="jabatan_pekerjaan" class="form-control <?php echo form_error('jabatan_pekerjaan') ? 'is-invalid':'' ?>" placeholder="Deskripsi jabatan/pekerjaan">
											<div class="invalid-feedback">
												<?php echo form_error('jabatan_pekerjaan') ?>
											</div>
										</div>
									</div>
										




									<div class="form-group">
										<label for="full_name">Nama Lengkap *</label>
										<input class="form-control <?php echo form_error('full_name') ? 'is-invalid':'' ?>"
										 type="text" name="full_name" placeholder="Nama Lengkap Anda" />
										<div class="invalid-feedback">
											<?php echo form_error('full_name') ?>
										</div>
									</div>
									
									
									<div class="row form-inline">
									
										<div class="input-group col-md-6 mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="tempat">Tempat</span>
											</div>
											<label for="tempat"></label>
											<input type="text" name="tempat" class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>" placeholder="Tempat Lahir">
											<div class="invalid-feedback">
												<?php echo form_error('tempat') ?>
											</div>
										</div>
										<!-- dibagi menjadi dua bagian -->
										<div class="input-group col-md-6 mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="tgl_lahir">Tanggal Lahir</span>
											</div>
											<label for="tgl_lahir"></label>
											<input type="date" name="tgl_lahir" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" placeholder="">
											<div class="invalid-feedback">
												<?php echo form_error('tgl_lahir') ?>
											</div>
										</div>

									</div>
									
						
									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
										 type="email" name="email" placeholder="namaAnda@example.com" />
										<div class="invalid-feedback">
											<?php echo form_error('email') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="password">Password *</label>
										<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
										 type="password" name="password" placeholder="Password Baru" />
										<div class="invalid-feedback">
											<?php echo form_error('password') ?>
										</div>
									</div>
						
						
									<div class="form-group">
										<label for="phone">Nomor Handphone</label>
										<input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
										 type="number" name="phone" min="0" placeholder="Nomer Handphone" />
										<div class="invalid-feedback">
											<?php echo form_error('phone') ?>
										</div>
									</div>
						
									


						
									<div class="form-group">
										<label for="photo">Foto</label>
										<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
										 type="file" name="photo" />
										<div class="invalid-feedback">
											<?php echo form_error('photo') ?>
										</div>
									</div>
									
									
									
						
									<!-- <div class="form-group">
										<label for="deskription">Dekripsi*</label>
										<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
										 name="description" placeholder="Deskripsi produk..."></textarea>
										<div class="invalid-feedback">
											<?php echo form_error('description') ?>
										</div>
									</div> -->
						
									<input class="btn btn-success" type="submit" name="btn" value="Tambah Pegawai" />
								</form>
						
							</div>
						
							<div class="card-footer small text-muted">
								* Harus diisi
							</div>
						
						
		    </div>
		</div>
		<!-- /.container-fluid -->
    </main>





    <!-- ini bagian footer  -->
    <?php $this->load->view("_partials/5footer.php") ?>





        <!-- akhir dari konten -->
        </div> 


        <!-- modal -->
        <!-- modal untuk klik logout dari navbar-->
        <?php $this->load->view("_partials/6modal.php") ?>


        <!--  ??php $this->load->view("admin/_partials/6modal.php") ?> -->
        <!-- Ini adalah script dari link internet -->
        <?php $this->load->view("_partials/7js.php") ?>
    </body>
</html>
