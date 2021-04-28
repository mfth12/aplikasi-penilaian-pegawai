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
            <h1 class="mt-4">Edit Pegawai</h1>
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
			<!-- ini untuk tulisan sukses, disini yaa -->
			
			
			<div class="card mb-4">
							<div class="card-header">
								<a href="<?php echo site_url('admin/data_pegawai') ?>">
								<i class="fas fa-arrow-left"></i> Kembali</a>
							</div>
							<div class="card-body">
						
								<form action="" method="post" enctype="multipart/form-data" >
								<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
								oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->
								<input type="hidden" name="id" value="<?php echo $pegawai->user_id?>" />
								<!-- hidden -->


									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="nik">NIPY *</span>
										</div>
										<label for="nik"></label>
										<input type="text" name="nik" class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>" 
										placeholder="Nomer Induk Pegawai Yayasan" value="<?php echo $pegawai->nik ?>">
										<div class="invalid-feedback">
											<?php echo form_error('nik') ?>
										</div>
									</div>


									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="role">Hak Akses *</label>
									  </div>
									  <select class="custom-select <?php echo form_error('role') ? 'is-invalid':'' ?>" name="role">
									    <option value="<?php echo $pegawai->role ?>" selected>Tetap sebagai <?php echo $pegawai->role ?></option>
									    <option value="pegawai">Ganti ke Pegawai</option>
									    <option value="kepsek">Ganti ke Kepsek</option>
									    <option value="admin">Ganti ke Admin</option>
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
									    	<option value="<?php echo $pegawai->unit ?>" selected>Tetap di unit <?php echo $pegawai->unit ?></option>
										<?php foreach ($data_unit as $units): ?>
							            	<option value="<?php echo $units["unit"]; ?>"> <?php echo "Ganti ke unit ".$units["unit"]; ?></option>
                                        <?php endforeach; ?>
									    <!-- <option value="RA">Ganti ke unit RA</option>
									    <option value="SDIT">Ganti ke unit SDIT</option>
									    <option value="SMPIT">Ganti ke unit SMPIT</option>
									    <option value="YAYASAN">Ganti ke unit YAYASAN</option> -->

									  </select>
									  <div class="invalid-feedback">
											<?php echo form_error('role') ?>
										</div>
									</div>

									<div class="row mb-4">
									

										<!-- <input type="hidden" name="pangkat_gol" value="<?php echo $pegawai->pangkat_gol?>" /> -->
										<div class="input-group col-md-6 mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text" id="pangkat_gol">Pangkat/Golongan**</span>
											</div>
											<label for="pangkat_gol_display"></label>
											<input type="text" name="pangkat_gol_display" class="form-control <?php echo form_error('pangkat_gol_display') ? 'is-invalid':'' ?>" 
											placeholder="" value="<?php echo $pegawai->pangkat_gol ?>">
											<!-- space -->
											<div class="input-group">
											</div>
										</div>

										<div class="input-group col mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text" id="jabatan_pekerjaan">Jabatan/Pekerjaan</span>
											</div>
											<label for="jabatan_pekerjaan"></label>
											<input type="text" name="jabatan_pekerjaan" class="form-control <?php echo form_error('jabatan_pekerjaan') ? 'is-invalid':'' ?>" 
											placeholder="" value="<?php echo $pegawai->jabatan_pekerjaan ?>">
											<div class="invalid-feedback">
												<?php echo form_error('panjabatan_pekerjaangkat_gol') ?>
											</div>
										</div>
										<!-- end inline -->

									</div>
									
									<!-- <small class="mb-3" for="pangkat_gol_display" id="pangkat_gol_display" class="form-text text-muted">** Membutuhkan pengajuan pangkat dan persetujuan dari pejabat yayasan.</small>
										<div class="row mb-3"></div>	 -->

									
									<div class="form-group">
										<label for="full_name">Nama Lengkap *</label>
										<input class="form-control mb-3	 <?php echo form_error('full_name') ? 'is-invalid':'' ?>"
										 type="text" name="full_name" value="<?php echo $pegawai->full_name ?>" placeholder="Nama Lengkap Anda" />
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
											<input type="text" name="tempat" class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>" placeholder="Tempat Lahir"
											value="<?php echo $pegawai->tempat ?>">
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
											<input type="date" name="tgl_lahir" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" 
											value="<?php echo $pegawai->tgl_lahir ?>">
											<div class="invalid-feedback">
												<?php echo form_error('tgl_lahir') ?>
											</div>
										</div>
	
									</div>
						
									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
										 type="email" name="email" value="<?php echo $pegawai->email ?>" placeholder="namaAnda@example.com" />
										<div class="invalid-feedback">
											<?php echo form_error('email') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="password">Password</label>
										<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
										 type="password" name="password" placeholder="Kosongkan jika tidak ingin mengganti password"/>
										<input class="form-control <?php echo form_error('password_lama') ? 'is-invalid':'' ?>"
										 type="hidden" name="password_lama" value="<?php echo $pegawai->password ?>"/>


										<div class="invalid-feedback">
											<?php echo form_error('password') ?>
										</div>
									</div>
						
						
									<div class="form-group">
										<label for="phone">Nomor Handphone</label>
										<input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
										 type="number" name="phone" value="<?php echo $pegawai->phone ?>" min="0" placeholder="Nomer Handphone" />
										<div class="invalid-feedback">
											<?php echo form_error('phone') ?>
										</div>
									</div>
						
									


						
									<div class="form-group">
										<label for="photo">Foto</label>
										<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
										 type="file" name="photo" />

										<input type="hidden" name="old_photo" value="<?php echo $pegawai->photo ?>" />
										
										<div class="invalid-feedback">
											<?php echo form_error('photo') ?>
										</div>
									</div>

									<div class="form-group">
										<input class="form-control <?php echo form_error('created_at') ? 'is-invalid':'' ?>"
										 type="hidden" name="created_at" value="<?php echo $pegawai->created_at ?>"  placeholder="dibuat pada" />
										<div class="invalid-feedback">
											<?php echo form_error('created_at') ?>
										</div>
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Akses Login Terakhir</span>
										</div>
										<label for="last"></label>
										<input type="hidden" name="last_login" class="form-control" 
										value="<?php echo $pegawai->last_login ?>"> <!-- ini di hidden -->
										
										<input type="text" name="last_login_show" class="form-control" disabled 
										value="<?php echo $pegawai->last_login ?>"> 
										<div class="invalid-feedback">
											<?php echo form_error('last_login') ?>
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

									<button type="reset" class="btn btn-secondary">Reset</button>
									<input class="btn btn-success" type="submit" name="btn" value="Perbarui Pegawai" />
								</form>
						
							</div>
						
							<div class="card-footer small text-muted">
								* Tidak boleh kosong
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
