<!DOCTYPE html>
<html lang="en">
    
    <head>
        <!-- menggunakan partials 'head.php' -->
        <?php $this->load->view("_partials/1head.php") ?>
        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>
    
    <body class="sb-nav-fixed">
        <!-- partial navbar -->
        <?php $this->load->view("_partials/2navbar.php") ?>
        <!-- selesai partial navbar -->
        
        
        <div id="layoutSidenav">
            <!-- partial side_navigation -->
            <?php $this->load->view("_partials/3sidenav.php") ?>

            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <div id="layoutSidenav_content">
                
                
                
                <main>
                    <!-- masuk ke kontainer konten halaman -->
                    
                    
                    
                    <div class="container-fluid"> 
                        <!-- ini nama judul halaman -->
                        <h1 class="mt-4">Profile</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        <!-- ini untuk tulisan sukses, disini yaa -->
						            <?php $this->load->view("_partials/8flash.php") ?>


                        <!-- sekarang masuk ke kolom isi konten -->
      <div class="row">
      <div class="col-md-4 order-md-1" >
      <!-- order-md-2 mb-4 -->
      <!-- <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3sd</span>
      </h4> -->
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div class="my-1">
            <img src="<?php echo base_url('upload/user/'.$photo) ?>" class="img-fluid" alt="<?php echo $nama ?>"/>
          </div>
        </li>
        

        <li class="list-group-item d-flex justify-content-between bg-light">
          <div>
            <h6 class="my-0">Terdaftar pada:</h6>
            <small class="text-muted"><?php echo date('l, d F Y', strtotime($created_at))?></small>
          </div>
          <span class="text-muted"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div>
            <h6 class="my-0">Akses login terakhir:</h6>
            <small class="text-muted"><?php echo date('l, d F Y', strtotime($last_login))?></small>
          </div>
          <span class="text-muted"></span>
        </li>

        
        <li class="list-group-item d-flex justify-content-between bg-light">
          <span>
          <button class="btn btn-secondary mr-3" data-toggle="modal" data-target="#editPassword">Ganti Password</button>
          </span>
          <button class="btn btn-success" data-toggle="modal" data-target="#editProfile">Edit Profile</button>
        </li>
      </ul>

      <!-- <form class="card p-2 mb-4">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form> -->
    </div> 

    <div class="col-md-8 order-md-1">
      <!-- <h4 class="mb-3 text-muted">Detail Pegawai</h4> -->
      <form class="needs-validation" novalidate>
        <div class="row mb-3">

        <div class="col">
          <!-- <label for="username">Nomor Induk Kewarganegaraan</label> -->
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">NIPY</span>
            </div>
            <input type="text" value="<?php echo $username ?>" class="form-control" id="username" placeholder="Username" required disabled>
            
          </div>
        </div>
        </div>

        <div class="row mb-4">
        
        <div class="col">
          <!-- <label for="username">Nomor Induk Kewarganegaraan</label> -->
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Hak akses</span>
            </div>
            <input type="text" value="<?php if($role == 'admin') echo "Pejabat Yayasan";?><?php if($role == 'pegawai') echo "Pegawai";?><?php if($role == 'kepsek') echo "Kepala Sekolah";?> " class="form-control" placeholder="Username" disabled>
            
          </div>
        </div>
        </div>

        <div class="row">


          <div class="col-md-6">
            <label for="nama">Nama Lengkap</label>
            <h4 id="nama" class="mb-3 text-muted"><?php echo $nama ?></h4>
            <!-- <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $nama ?>" required> -->
          </div>

          <div class="col">
            <label for="unit">Unit</label>
            <h4 id="unit" class="mb-3 text-muted"><?php echo $unit ?></h4>
          </div>
        </div>

        


        <div class="row">


          <div class="col-md-6">
            <label for="pangkat_gol">Jabatan/Golongan</label>
            <h4 id="pangkat_gol" class="mb-3 text-muted"><?php 
              if (!empty($pangkat_gol)) { //ini jika kolom  kosong
                echo $pangkat_gol;
            } else { // dan jika berisi inputan data
              echo "(Belum ada data)"; //maka akan tetap 
            }?>
            </h4>
          </div>

          <div class="col">
            <label for="jabatan_pekerjaan">Pekerjaan</label>
            <h4 id="jabatan_pekerjaan" class="mb-3 text-muted"><?php 
              if (!empty($jabatan_pekerjaan)) { //ini jika kolom  kosong
                echo $jabatan_pekerjaan;
            } else { // dan jika berisi inputan data
              echo "(Belum ada data)"; //maka akan tetap 
            }?>
            </h4>
          </div>
        </div>


        <div class="mb-3">
          <label for="email">Tempat, Tanggal Lahir</label> <!-- <span class="text-muted">(Optional)</span> -->
          <h4 id="email" class="mb-3 text-muted"><?php 
            if (!empty($tempat) && !empty($tgl_lahir)) { //ini jika kolom email kosong
              $tampil_tgl = date('d F Y', strtotime($tgl_lahir));
              echo $tempat.", ".$tampil_tgl;
          } else { // dan jika berisi inputan data
            echo "(Belum ada data)"; //maka akan tetap 
          }?></h4>
        </div>


        <div class="mb-3">
          <label for="email">Email</label> <!-- <span class="text-muted">(Optional)</span> -->
          <h4 id="email" class="mb-3 text-muted"><?php 
            if (empty($email)) { //ini jika kolom email kosong
              echo "(Belum ada data)";
          } else { // dan jika berisi inputan data
            echo $email; //maka akan tetap 
          }?></h4>
        </div>

        <div class="mb-4">
          <label for="phone">Nomor Handphone</label> <!-- <span class="text-muted">(Optional)</span> -->
          <h4 id="phone" class="mb-3 text-muted"><?php
          if (empty($phone)) { //ini jika kolom phone kosong
            echo "(Belum ada data)";
        } else { // dan jika berisi inputan data
          echo $phone; //maka akan tetap 
        }?></h4>
        </div>

        <!-- <hr>
        <div class="mb-3">
          <label for="last_login">Terdaftar Pada</label>
          <h5 id="last_login" type="date" class="mb-3 text-muted"><?php echo $created_at ?></h5>
        </div>
        <div class="mb-3">
          <label for="last_login">Akses Login Terakhir</label>
          <h5 id="last_login" type="date" class="mb-3 text-muted"><?php echo $last_login ?></h5>
        </div> -->

        <!-- <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div> -->
        

        <!-- <div class="row">
          <div class="col-md-6 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          
          
        </div> -->


        <!-- <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4"> -->
        <!-- <button class="btn btn-success" type="submit">Edit Profile</button> -->
      </form>
    </div>
                        </div>

                        <!-- area data tabel -->
                        <!-- <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Profil Pegawai
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Nama Lengkap</label>
                                </div>
                            </div>
                        </div>     -->

                        
                        

                        <!-- area bar -->
                        <!-- close row class -->
                        




                    </div>
                </main>





                <!-- ini bagian footer  -->
                <?php $this->load->view("_partials/5footer.php") ?>
                        
                
                <!-- end footer -->
            </div>
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
        </div>


        <!-- modal -->
        <!-- modal untuk klik logout dari navbar-->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> 
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('profile/edits/'. $user_id) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" value="<?php echo $user_id ?>" class="form-control" name="user_id" id="user_id">
          <input type="hidden" value="<?php echo $role ?>" class="form-control" name="role" id="role">
          <input type="hidden" value="<?php echo $unit ?>" class="form-control" name="unit" id="unit">
          <input type="hidden" value="<?php echo $pangkat_gol ?>" class="form-control" name="pangkat_gol" id="pangkat_gol">
          <input type="hidden" value="<?php echo $jabatan_pekerjaan ?>" class="form-control" name="jabatan_pekerjaan" id="jabatan_pekerjaan">
          <input type="hidden" value="<?php echo $created_at ?>" class="form-control" name="created_at" id="created_at">
          <input type="hidden" value="<?php echo $last_login ?>" class="form-control" name="last_login" id="last_login">
          <input type="hidden" value="<?php echo $is_active ?>" class="form-control" name="is_active" id="is_active">
          <input type="hidden" value="<?php echo $password ?>" name="password_lama" />
          <input type="hidden" name="password" />
          <input type="hidden" value="<?php echo $username ?>" name="nik" />

          
          
          
          
          <label for="nama">Nama Lengkap</label>
          <input type="text" value="<?php echo $nama ?>" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" name="nama" id="nama" autofocus>
          <small id="nama" class="form-text text-muted"></small>
          <div class="invalid-feedback">
						<?php echo form_error('nama') ?>
					</div>
        </div>
        <!-- end -->
        <label for="tempat">TTL</label>
        <div class="row form-inline">
										<div class="input-group col-md-7 mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="tempat">Tempat</span>
											</div>
											<label for="tempat"></label>
											<input type="text" name="tempat" class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>" placeholder="Tempat Lahir"
											value="<?php echo $tempat ?>">
											<div class="invalid-feedback">
												<?php echo form_error('tempat') ?>
											</div>
										</div>
										<!-- dibagi menjadi dua bagian -->
										<div class="input-group col mb-3">
											
											<label for="tgl_lahir"></label>
											<input type="date" name="tgl_lahir" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>" 
											value="<?php echo $tgl_lahir ?>">
											<div class="invalid-feedback">
												<?php echo form_error('tgl_lahir') ?>
											</div>
										</div>
	
									</div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"  class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" value="<?php echo $email ?>" name="email">
          <small id="email" class="form-text text-muted"></small>
          <div class="invalid-feedback">
						<?php echo form_error('email') ?>
					</div>
        </div>
        <!-- end -->
        
        
        <div class="form-group">
          <label for="phone">Nomor Handphone</label>
          <input type="number"  class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" value="<?php echo $phone ?>" name="phone">
          <small id="phone" class="form-text text-muted"></small>
          <div class="invalid-feedback">
						<?php echo form_error('phone') ?>
					</div>
        </div>
        <!-- end -->

        <div class="form-group">
				  	<label for="photo">Foto</label>
				  	<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
				  	 type="file" name="photo" />
				  	<input type="hidden" name="old_photo" value="<?php echo $photo ?>" />
  
				  	<div class="invalid-feedback">
				  		<?php echo form_error('photo') ?>
				  	</div>
				</div>
        <!-- end -->
        
      <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
      <button type="submit" class="btn btn-success" href="<?php echo site_url('profile/edits/'. $user_id) ?>">Perbarui</button>
      </form>
    </div>
    <!-- <div class="modal-footer">
      <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
      </div> -->
    </div>
  </div>
</div>


<!-- modal ganti password-->
<!-- modal ganti password-->
<!-- modal ganti password-->
<!-- modal ganti password-->
<!-- modal ganti password-->
<!-- modal ganti password-->
<!-- modal untuk klik logout dari navbar-->
<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> 
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('profile/edit_password/'. $user_id) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" value="<?php echo $user_id ?>" class="form-control" name="user_id">
          <!-- <input type="hidden" value="<?php echo $role ?>" class="form-control" name="role" id="role">
          <input type="hidden" value="<?php echo $unit ?>" class="form-control" name="unit" id="unit">
          <input type="hidden" value="<?php echo $pangkat_gol ?>" class="form-control" name="pangkat_gol" id="pangkat_gol">
          <input type="hidden" value="<?php echo $jabatan_pekerjaan ?>" class="form-control" name="jabatan_pekerjaan" id="jabatan_pekerjaan">
          <input type="hidden" value="<?php echo $created_at ?>" class="form-control" name="created_at" id="created_at">
          <input type="hidden" value="<?php echo $last_login ?>" class="form-control" name="last_login" id="last_login">
          <input type="hidden" value="<?php echo $is_active ?>" class="form-control" name="is_active" id="is_active">
          <input type="hidden" value="<?php echo $password ?>" name="password_lama" />
          <input type="hidden" name="password" />
          <input type="hidden" value="<?php echo $username ?>" name="nik" /> -->

          <input type="hidden" value="<?php echo $password ?>" name="data_password_lama" />
          <label for="password_lama">Password Lama</label>
          <input type="password" class="form-control <?php echo form_error('input_tahun') ? 'is-invalid':'' ?>" name="password_lama" id="password_lama" autofocus required> 
          <small id="input_tahun" class="form-text text-muted"></small>
          <div class="invalid-feedback">
						<?php echo form_error('input_tahun') ?>
					</div>
        </div>
        <!-- end -->
        <div class="form-group">
          <label for="password_verif">Password Baru</label>
          <input type="password"  class="form-control <?php echo form_error('password_verif') ? 'is-invalid':'' ?>" name="password_verif" id="password_verif" required>
          <small id="password_verif" class="form-text text-muted"></small>
          <div class="invalid-feedback">
						<?php echo form_error('password_verif') ?>
					</div>
        </div>
        <!-- end -->
        
        
        <div class="form-group">
          <label for="password_baru">Konfirmasi Password Baru</label>
          <input type="password"  class="form-control <?php echo form_error('password_baru') ? 'is-invalid':'' ?>" name="password_baru" id="password_baru" required>
          <small id="password_baru" class="form-text text-muted">Tuliskan password verifikasi baru anda.</small>
          <div class="invalid-feedback">
						<?php echo form_error('password_baru') ?>
					</div>
        </div>
        <!-- end -->
        <!-- end -->
        
      <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
      <button type="submit" class="btn btn-success" href="<?php echo site_url('profile/edit_password/'. $user_id) ?>">Ganti</button>
      </form>
    </div>
    <!-- <div class="modal-footer">
      <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
      </div> -->
    </div>
  </div>
</div>

<!-- Logout Modal-->
<!-- Logout Modal-->
<!-- Logout Modal-->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar dari Sistem?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Silakan keluar jika anda sudah yakin, dan ingin menyudahi sesi Anda dalam sistem ini.</div>
      <div class="modal-footer">

        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?php echo base_url('index.php/auth/logout'); ?>">Keluar</a>
        
      </div>
    </div>
  </div>
</div>

        <!--  ??php $this->load->view("admin/_partials/6modal.php") ?> -->
        <!-- Ini adalah script dari link internet -->
        <?php $this->load->view("_partials/7js.php") ?>
    </body>
</html>
