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

            <div id="layoutSidenav_content">
                <main>
                    <!-- masuk ke kontainer konten halaman -->
                    <div class="container-fluid"> 
                        <!-- ini nama judul halaman -->
                        <h1 class="mt-4">Input Penilaian</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        <!-- ini untuk tulisan sukses, disini yaa -->
						            <?php $this->load->view("_partials/8flash.php") ?>

                        <div class="card mb-4">
                            <div class="card-body">
                                Penilaian pegawai dilakukan dari atasan unit (Kepala Sekolah) kepada pegawai/guru dalam unit masing-masing. Penilaian dilakukan pertahun. Dan setiap penilaian 
                                membutuhkan konfirmasi pegawai/guru yang bersangkutan. Ditahap akhir, penilaian akan diapprove oleh Yayasan. Untuk melihat hasil penilaian yang telah anda input, 
                                <a href="<?php echo site_url('kepsek/hasil_input') ?>">klik disini</a>.
                            </div> <!-- tutup card -->
                        </div>

                        <!-- sekarang masuk ke kolom isi konten -->
              
                        <div class="row">
                          <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                              <span class="text-muted">Identitas Penilai</span>
                            </h4>
                            <ul class="list-group mb-3">
                              <li class="list-group-item">
                                <div>
                                  <h6 class="my-0" value="">Nama penilai</h6>
                                  <div class="d-flex justify-content-between lh-condensed">
                                    <small class="text-muted"><?php echo $this->session->userdata('nama') ?></small>
                                    <small class="text-muted"><?php echo "[".$this->session->userdata('username')."]"; ?></small>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <h6 class="my-0">Status login sebagai</h6>
                                  <small class="text-muted"><?php if($this->session->userdata('role') == 'admin') echo "Pejabat";?><?php if($this->session->userdata('role') == 'pegawai') echo "Pegawai";?><?php if($this->session->userdata('role') == 'kepsek') echo "Kepala Sekolah"; echo " ".$this->session->userdata('unit'); ?></small>
                                </div>
                              </li>
                            </ul>
                          </div> 

                            
            
                            <div class="col-md-8 order-md-1"><!--   -->
                              <h4 class="mb-3">Daftar Penilaian Pelaksanaan Pekerjaan (DP3)</h4>
          <div class="card mb-4">
            <div class="card-body">
                              <form class="needs-validation" action="<?php echo site_url('kepsek/input_penilaian/kirim') ?>" method="post" enctype="multipart/form-data">
                                


                                <div class="row">
                                  <div class="form-group col">
                                    <button autofocus class="btn btn-primary" data-toggle="modal" type="button" data-target="#modal_nilai"><i class="fas fa-link"></i> Input</button>
                                  </div>
                                </div>
                                <!-- disini -->


                                
                                <!-- Hasil masukan dari modal -->
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="cc-name">1. Kesetiaan</label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 1A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 1B" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_1a" 
                                      value="<?php if(isset($_POST['nilai_1a'])) echo $_POST["nilai_1a"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_1a'])) echo "(Belum ada input)";?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_1b"
                                      value="<?php if(isset($_POST['nilai_1b'])) echo $_POST["nilai_1b"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_1b'])) echo "(Belum ada input)";?>"
                                      />
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback">
                                      Name on card is required
                                    </div>
                                  </div>
                                </div>


                                <!-- Hasil masukan dari modal -->
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="cc-name">2. Paedagogis</label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2D" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_2a"
                                      value="<?php if(isset($_POST['nilai_2a'])) echo $_POST["nilai_2a"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_2a'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_2b"
                                      value="<?php if(isset($_POST['nilai_2b'])) echo $_POST["nilai_2b"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_2b'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_2c" 
                                      value="<?php if(isset($_POST['nilai_2c'])) echo $_POST["nilai_2c"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_2c'])) echo "(Belum ada input)";?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_2d" 
                                      value="<?php if(isset($_POST['nilai_2d'])) echo $_POST["nilai_2d"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_2d'])) echo "(Belum ada input)";?>"
                                      />
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback">
                                      Name on card is required
                                    </div>
                                  </div>
                                </div>


                                <!-- Hasil masukan dari modal -->
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="cc-name">3. Profesi</label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3D" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_3a" 
                                      value="<?php if(isset($_POST['nilai_3a'])) echo $_POST["nilai_3a"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_3a'])) echo "(Belum ada input)";?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_3b" 
                                      value="<?php if(isset($_POST['nilai_3b'])) echo $_POST["nilai_3b"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_3b'])) echo "(Belum ada input)";?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_3c" 
                                      value="<?php if(isset($_POST['nilai_3c'])) echo $_POST["nilai_3c"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_3c'])) echo "(Belum ada input)";?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_3d" 
                                      value="<?php if(isset($_POST['nilai_3d'])) echo $_POST["nilai_3d"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_3d'])) echo "(Belum ada input)";?>"
                                      />
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback">
                                      Name on card is required
                                    </div>
                                  </div>
                                </div>


                                <!-- Hasil masukan dari modal -->
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="cc-name">4. Organisasi</label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4D" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4E" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_4a"
                                      value="<?php if(isset($_POST['nilai_4a'])) echo $_POST["nilai_4a"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_4a'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4b"
                                      value="<?php if(isset($_POST['nilai_4b'])) echo $_POST["nilai_4b"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_4b'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4c"
                                      value="<?php if(isset($_POST['nilai_4c'])) echo $_POST["nilai_4c"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_4c'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4d"
                                      value="<?php if(isset($_POST['nilai_4d'])) echo $_POST["nilai_4d"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_4d'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4e"
                                      value="<?php if(isset($_POST['nilai_4e'])) echo $_POST["nilai_4e"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_4e'])) echo "(Belum ada input)";?>"
                                       />
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback">
                                      Name on card is required
                                    </div>
                                  </div>
                                </div>



                                <!-- Hasil masukan dari modal -->
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="cc-name">5. Personal Religius</label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5D" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_5a" 
                                      value="<?php if(isset($_POST['nilai_5a'])) echo $_POST["nilai_5a"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_5a'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_5b" 
                                      value="<?php if(isset($_POST['nilai_5b'])) echo $_POST["nilai_5b"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_5b'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_5c" 
                                      value="<?php if(isset($_POST['nilai_5c'])) echo $_POST["nilai_5c"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_5c'])) echo "(Belum ada input)";?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_5d" 
                                      value="<?php if(isset($_POST['nilai_5d'])) echo $_POST["nilai_5d"];?>" 
                                      placeholder="<?php if(!isset($_POST['nilai_5d'])) echo "(Belum ada input)";?>"
                                       />
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback">
                                      Name on card is required
                                    </div>
                                  </div>
                                </div>



                                <!-- <div class="row">
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
                                </div> -->
                                <div class="row">
                                  <!-- diatas -->
                                  <div class="input-group col-md-6 mb-3">
                                      <input class="form-control" readonly required value="" type="text" id="nilai_nik" name="nilai_nik" placeholder="NIK Pegawai" aria-label="Search" aria-describedby="basic-addon2" />
                                      <input class="form-control" hidden required value="" type="text" id="nilai_id" name="user_id" />
                                      <input class="form-control" hidden required value="<?php echo $this->session->userdata('user_id') ?>" type="text" name="penginput_id" />
                                      <input class="form-control" hidden required value="<?php echo $this->session->userdata('nama') ?>" type="text" name="penginput_nama" />
                                      <div class="input-group-append">
                                          <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#cari_pegawai"><i class="fas fa-search"></i></button>
                                      </div>
                                  </div>
                                  <!-- bawah -->
                                </div>

                                <div class="row">
                                  <!-- diatas  -->
                                  <div class="col-md-6 mb-3">
                                    <label for="nilai_nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nilai_nama" name="nilai_nama" placeholder="" value="" required readonly>
                                    <div class="invalid-feedback">
                                      Nama lengkap harus diisi.
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="nilai_unit">Pegawai Unit</label>
                                    <input type="text" class="form-control" id="nilai_unit" name="nilai_unit" placeholder="" value="" required readonly>
                                    <div class="invalid-feedback">
                                      Nama lengkap harus diisi.
                                    </div>
                                  </div>
                                  <!--  -->
                                </div>


                                <div class="row">
                                  <div class="form-group col-md-6 mb-3">
                                    <label for="">Tahun Penilaian</label>
                                      <select name="nilai_tahun" class="form-control" required>
                                        <?php foreach ($data_tahun as $tahuns): ?>
							                          <option value="<?php echo $tahuns["tahun"]; ?>"> <?php echo $tahuns["tahun"]; ?></option>
                                        <?php endforeach; ?>
                                      </select>                        
                                  </div>
                                </div>

                                <!-- ekor -->
                                <!-- ekor -->
                                <!-- ekor -->
                                <!-- ekor -->
                                <!-- ekor -->
                                <!-- ekor -->
                                <div class="row">
                                  <div class="form-group col mb-3">
						                      	<label for="nilai_tambahan">Penilaian Tambahan</label>
						                      	<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
						                      	 name="nilai_tambahan" required placeholder="Deskripsikan penilaian Anda tentang pegawai yang bersangkutan dalam paragraf"></textarea>
						                      	<div class="invalid-feedback">
						                      		<?php echo form_error('nilai_tambahan') ?>
						                      	</div>

						                      </div>
                                </div>
                                
                                <div class="mb-2">
                                <small><a class="text-primary">Catatan: </a>Semua kolom wajib diisi, jangan sampai ada yang tertinggal.</small>
                                </div>
                                <hr>
                                <button class="btn btn-primary" type="submit">Simpan Penilaian  <i class="fas fa-arrow-right"> </i> </button>
                              </form>
            </div> <!-- tutup card -->
          </div>
                            </div>
                            <!-- tulisan untuk row data, bebas -->
                            
                        </div>
                        <div>
                        <br>
                        </div>

                        <!-- area data tabel -->
                        


                    </div>
                </main>

                <!-- ini bagian footer  -->
                <?php $this->load->view("_partials/5footer.php") ?>
                        
                
                <!-- end footer -->
            </div>

            <!-- konten halaman sudah berakhir disini(sidenav_content) -->
            <!-- konten halaman sudah berakhir disini(sidenav_content) -->
            <!-- konten halaman sudah berakhir disini(sidenav_content) -->
        </div>


        <!-- modal -->
        <!-- modal untuk klik logout dari navbar-->
        <?php $this->load->view("_partials/6modal.php") ?>

        <!-- Modal Kecil Detail Tahun-->
        <!-- Modal Kecil Detail Tahun-->
        <!-- Modal Kecil Detail Tahun-->
        <!-- Modal Kecil Detail Tahun-->
        <div class="modal fade" id="cari_pegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">  <!-- modal-xl modal-lg modal-sm -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">List Pegawai Dari Unit Anda</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span> 
                </button>
              </div>
              <div class="modal-body">
              <!-- modal body -->
              <!-- modal body -->
              <!-- modal body -->
              <table class="table table-hover table-striped table-bordered table-sm" id="dataTable"  width="100%" cellspacing="0">
                                        
                                        <!-- buat head table -->
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th>Nama Pegawai</th>
                                                <th>Unit</th>
                                                <th>Pekerjaan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <!-- perbatasan -->
                                        <tbody>
                                            <?php 
											                      $no = 0;
											                      foreach ($data_input as $liat_pegawai): 
											                      $no++;
				        					                  ?>
                                            <tr>
                                                <td class="text-center" width="20">
                                                    <?php echo $no . "."; ?>
                                                </td>
                                                <td><?php echo $liat_pegawai->full_name ?></td>
                                                <td><?php echo "Pegawai ".$liat_pegawai->unit ?></td>
                                                <td><?php echo $liat_pegawai->jabatan_pekerjaan ?></td>
                                                <td class="text-center">
                                                  <a href="#" id="pilih" 
                                                  data-id="<?=$liat_pegawai->user_id?>"
                                                  data-nik="<?=$liat_pegawai->nik?>"
                                                  data-nama="<?=$liat_pegawai->full_name?>"
                                                  data-unit="<?=$liat_pegawai->unit?>"
                                                  data-photo="<?=$liat_pegawai->photo?>"
                                                  data-pekerjaan="<?=$liat_pegawai->jabatan_pekerjaan?>"
                                                  > <!-- dikirim ke form  -->
                                                  <i class="fa fa-check"></i>
                                                  Pilih
                                                  </a>
                                                </td>
                                            </tr>
                                            
                                            
                                            <?php endforeach; ?>
                                            <!-- end of body -->
                                        </tbody>
                                    </table>
              <!-- end modal body -->
            </div>
            <div class="modal-footer">
              <a id="btn-delete" class="btn btn-secondary" href="#" data-dismiss="modal" aria-label="Close">Batal</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Penginputan nilai-->
        <!-- Modal Penginputan nilai-->
        <!-- Modal Penginputan nilai-->
        <!-- Modal Penginputan nilai-->
        <div class="modal fade" id="modal_nilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">  <!-- modal-xl modal-lg modal-sm -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Penilaian</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span> 
                </button>
              </div>
              <div class="modal-body">
              <!-- modal body -->
              <!-- modal body -->
              <!-- modal body -->
                            <div class="container col-md-10 offset-md-1"> <!-- order-md-1 -->
                              <form class="needs-validation" action="" target="_self" method="post" enctype="multipart/form-data">
                                <!-- PEMBATAS GROUP INPUT -->
                                <div class="form-group mb-3">
                                <h4 class="text-muted">1. Kesetiaan</h4>
                                </div>
                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_1a"><h5 class="text-muted">A. Kehadiran</h5> </label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Kehadiran 100 %  |  
                                      <a class="text-primary">Baik </a>Kehadiran 90 % - 99%  |  
                                      <a class="text-primary">Cukup </a>Kehadiran 75% - 89%  |  
                                      <a class="text-primary">Sedang </a>Kehadiran 60% - 74%  |  
                                      <a class="text-primary">Kurang </a>Kehadiran < 60%.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_1a" value="<?php if(isset($_POST['nilai_1a'])) echo $_POST["nilai_1a"];?>" 
                                    name="nilai_1a" min="1" max="100" placeholder="Nilai antara 1-100">
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-4">
                                  <label for="nilai_1b"><h5 class="text-muted">B. Kedisiplinan</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Senantiasa disiplin dalam administrasi dan kehadiran kegiatan tepat waktu dan dapat dijadikan contoh | 
                                      <a class="text-primary">Baik </a>Senantiasa disiplin dalam administrasi dan kehadiran kegiatan tepat waktu | 
                                      <a class="text-primary">Cukup </a>Ada usaha untuk  disiplin dalam administrasi dan kehadiran kegiatan tepat waktu | 
                                      <a class="text-primary">Sedang </a>Disiplin administrasi dan kehadiran kegiatan perlu perhatian | 
                                      <a class="text-primary">Kurang </a>Disiplin administrasi dan kehadiran kegiatan sangat rendah.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_1b" value="<?php if(isset($_POST['nilai_1b'])) echo $_POST["nilai_1b"];?>" 
                                    name="nilai_1b" min="1" max="100" placeholder="Nilai kedisiplinan antara 1-100">
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>


                                <!-- PEMBATAS GROUP INPUT -->
                                <div class="form-group mb-3">
                                <hr>
                                <h4 class="text-muted">2. Paedagogis</h4>
                                </div>
                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_2a"><h5 class="text-muted">A. Penyerahan Perangkat Administrasi</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Tepat waktu | 
                                      <a class="text-primary">Baik </a>Terlambat (< 5 hari) | 
                                      <a class="text-primary">Cukup </a>Terlambat ( 6 - 10 hari) | 
                                      <a class="text-primary">Sedang </a>Terlambat (sebelum PTS) | 
                                      <a class="text-primary">Kurang </a>Sangat terlambat | 
                                      <a class="text-primary">Amat kurang </a>Tidak mengumpulkan.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_2a" name="nilai_2a" value="<?php if(isset($_POST['nilai_2a'])) echo $_POST["nilai_2a"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100">
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-4">
                                  <label for="nilai_2b"><h5 class="text-muted">B. Penyerahan Perangkat Penilaian<small> (Lengkap)</small></h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Tepat waktu | 
                                      <a class="text-primary">Baik </a>Terlambat (lebih 5 hari setelah ujian) | 
                                      <a class="text-primary">Cukup </a>Terlambat (6 - 10 hari) | 
                                      <a class="text-primary">Sedang </a>Terlambat (1 hari sebelum pembagian nilai) | 
                                      <a class="text-primary">Kurang </a>Tidak lengkap mengumpulkan | 
                                      <a class="text-primary">Amat kurang </a>Tidak mengumpulkan.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_2b" name="nilai_2b" value="<?php if(isset($_POST['nilai_2b'])) echo $_POST["nilai_2b"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100">
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-3">
                                  <label for="nilai_2c"><h5 class="text-muted">C. Pelaksanaan Tugas Sesuai Tupoksi</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Menjalankan standar dengan amat baik dan saling mengingatkan | 
                                      <a class="text-primary">Baik </a>Menjalankan amanah sesuai dengan standar dan dapat menjadi contoh | 
                                      <a class="text-primary">Cukup </a>Menjalankan amanah sesuai standar | 
                                      <a class="text-primary">Sedang </a>Berusaha menjalankan amanah sesuai standar) | 
                                      <a class="text-primary">Kurang </a>Kurang menjalankan amanah sesuai tupoksi.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_2c" name="nilai_2c" value="<?php if(isset($_POST['nilai_2c'])) echo $_POST["nilai_2c"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100">
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                    Periksa kembali input anda.
                                    </div>
                                  </div>
                                  

                                  <!--  -->
                                </div>

                                <div class="mb-4">
                                  <label for="nilai_2d"><h5 class="text-muted">D. Pelaksanaan Tugas Tambahan </h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Menjalankan dengan penuh semangat dan dapat menjadi contoh | 
                                      <a class="text-primary">Baik </a>Menjalankan amanah dengan baik dan dapat diandalkan | 
                                      <a class="text-primary">Cukup </a>Menjalankan amanah sejauh yang ditugaskan | 
                                      <a class="text-primary">Sedang </a>Ada usaha menjalankan amanah dengan sempurna | 
                                      <a class="text-primary">Kurang </a>Menjalankan dengan malas-malasan.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_2d" name="nilai_2d" value="<?php if(isset($_POST['nilai_2d'])) echo $_POST["nilai_2d"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>


                                <!-- PEMBATAS GROUP INPUT -->
                                <div class="form-group mb-3">
                                <hr>
                                <h4 class="text-muted">3. Profesi</h4>
                                </div>
                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_3a"><h5 class="text-muted">A. Kualitas pekerjaan</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Kualitas terbaik dan dapat dijadikan teladan | 
                                      <a class="text-primary">Baik </a>Menjalankan dengan baik melebihi target | 
                                      <a class="text-primary">Cukup </a>Menjalankan perkerjaan sesuai target | 
                                      <a class="text-primary">Sedang </a>Ada usaha utk mencapai target | 
                                      <a class="text-primary">Kurang </a>Tidak mencapai target | 
                                      <a class="text-primary">Amat kurang </a>Tidak melakukan pekerjaan.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_3a" name="nilai_3a" value="<?php if(isset($_POST['nilai_3a'])) echo $_POST["nilai_3a"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_3b"><h5 class="text-muted">B. Penggunaan Media dan ICT</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>> 90 % menggunakan ICT dan media | 
                                      <a class="text-primary">Baik </a>> 50% pembelajaran menggunakan media | 
                                      <a class="text-primary">Cukup </a>Penggunaan media mencapai 50% | 
                                      <a class="text-primary">Sedang </a>Penggunaan media kuranf dari 50 % | 
                                      <a class="text-primary">Kurang </a>Kurang dari 25% penggunaan media | 
                                      <a class="text-primary">Amat kurang </a>Tidak pernah menggunakan media.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_3b" name="nilai_3b" value="<?php if(isset($_POST['nilai_3b'])) echo $_POST["nilai_3b"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_3c"><h5 class="text-muted">C. Pengintegrasian Nilai Islam Dalam Pembelajaran</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>> 90 % pengintegrasian | 
                                      <a class="text-primary">Baik </a>> 50% pengintegrasian | 
                                      <a class="text-primary">Cukup </a>Pengintegrasian mencapai 50% | 
                                      <a class="text-primary">Sedang </a>Pengintegrasian kurang dari 50 % | 
                                      <a class="text-primary">Kurang </a>Kurang dari 25% pengintegrasian | 
                                      <a class="text-primary">Amat kurang </a>Tidak ada pengintegrasian.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_3c" name="nilai_3c" value="<?php if(isset($_POST['nilai_3c'])) echo $_POST["nilai_3c"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_3d"><h5 class="text-muted">D. Nilai Pencapaian KKM <small>(100% diatas KKM)</small></h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>100% melebihi KKM | 
                                      <a class="text-primary">Baik </a>100% mencapai KKM | 
                                      <a class="text-primary">Cukup </a>> 90 % mencapai KKM | 
                                      <a class="text-primary">Sedang </a>> 75 % mencapai KKM | 
                                      <a class="text-primary">Kurang </a>< 75 %.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_3d" name="nilai_3d" value="<?php if(isset($_POST['nilai_3d'])) echo $_POST["nilai_3d"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS GROUP INPUT -->
                                <div class="form-group mb-3">
                                <hr>
                                <h4 class="text-muted">4. Organisasi</h4>
                                </div>
                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_4a"><h5 class="text-muted">A. Kerjasama</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Sangat antusias berkerja sama dan dapat dijadikan teladan | 
                                      <a class="text-primary">Baik </a>Memiliki semangat berkerja sama dan berperan maksimal | 
                                      <a class="text-primary">Cukup </a>Berkerjasama dengan baik dan mulai menunjukkan inisiatif dalam berkerja | 
                                      <a class="text-primary">Sedang </a>Ada usaha untuk senantiasa berperan dalam kerja sama | 
                                      <a class="text-primary">Kurang </a>Kecendrungan tidak mau berkerja sama | 
                                      <a class="text-primary">Amat kurang </a>Tidak mau berkerjasama.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_4a" name="nilai_4a" value="<?php if(isset($_POST['nilai_4a'])) echo $_POST["nilai_4a"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_4b"><h5 class="text-muted">B. Kejujuran</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Memiliki sikap jujur, menyampaikan kejujuran dan dapat dijadikan teladan | 
                                      <a class="text-primary">Baik </a>Memiliki sikap jujur dan menjaga kepercayaan yang diberikan | 
                                      <a class="text-primary">Cukup </a>Berusaha untuk senantiasa jujur dan mengakui ketidakjujurannya | 
                                      <a class="text-primary">Sedang </a>Dalam beberapa hal bisa menampakkan kejujuran | 
                                      <a class="text-primary">Kurang </a>Belum dapat diberikan kepercayaan | 
                                      <a class="text-primary">Amat kurang </a>tidak jujur dan tidak bisa diberikan kepercayaan.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_4b" name="nilai_4b" value="<?php if(isset($_POST['nilai_4b'])) echo $_POST["nilai_4b"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_4c"><h5 class="text-muted">C. Kepemimpinan</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Memiliki bakat kepemimpinan, dapat memimpin dengan baik menggunakan manajemen kepemimpinan organisasi | 
                                      <a class="text-primary">Baik </a>Dapat memimpin kegiatan dan menyusun program dari perencanaan hingga pelaporan | 
                                      <a class="text-primary">Cukup </a>Dapat diandalkan dalam memimpin satuan tugas kecil | 
                                      <a class="text-primary">Sedang </a>Ada usaha utk dapat memimpin dengan baik dan diberikan kepercayaan memimpin  | 
                                      <a class="text-primary">Kurang </a>Kurang dapat ditunjuk sebagai pemimpin | 
                                      <a class="text-primary">Amat Kurang </a>Tidak dapat dijadikan pemimpin.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_4c" name="nilai_4c" value="<?php if(isset($_POST['nilai_4c'])) echo $_POST["nilai_4c"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_4d"><h5 class="text-muted">D. Prakarsa</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Memiliki inisiatif, ide dan gagasan yang selalu dapat dijadikan pengayaan kerja organisasi | 
                                      <a class="text-primary">Baik </a>Selalu memberikan solusi dan inisiatif dalam organisasi | 
                                      <a class="text-primary">Cukup </a>Terkadang memiliki inisiatif untuk sebuah kegiatan | 
                                      <a class="text-primary">Sedang </a>Menunjukkan inisiatif namun tidak secara langsung | 
                                      <a class="text-primary">Kurang </a>Kurang memiliki inisiatif.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_4d" name="nilai_4d" value="<?php if(isset($_POST['nilai_4d'])) echo $_POST["nilai_4d"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_4e"><h5 class="text-muted">E. Tanggung jawab</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Memiliki tanggung jawab yang sangat baik sehingga mengutamakan kepentingan oraganisasi dari pada kepentingan pribadi dan dapat dijadikan contoh | 
                                      <a class="text-primary">Baik </a>Memiliki tanggung jawab yang sangat baik dan dapat diandalkan | 
                                      <a class="text-primary">Cukup </a>Bertanggung jawab sebatas yang diamanahkan | 
                                      <a class="text-primary">Sedang </a>Ada usaha untuk bertanguugjawab penuh terhadap apa yang diamahkan | 
                                      <a class="text-primary">Kurang </a>Baginya tanggung jawab bukan prioritas utama.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_4e" name="nilai_4e" value="<?php if(isset($_POST['nilai_4e'])) echo $_POST["nilai_4e"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS GROUP INPUT -->
                                <div class="form-group mb-3">
                                <hr>
                                <h4 class="text-muted">5. Personal Religius</h4>
                                </div>
                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_5a"><h5 class="text-muted">A. Kehadiran Pengajian Pekanan</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Baik </a>Kehadiran 100 % dan tepat waktu | 
                                      <a class="text-primary">Cukup </a>Kehadiran 90 - 99% | 
                                      <a class="text-primary">Sedang </a>Kehadiran 75 % - 89 % | 
                                      <a class="text-primary">Kurang </a>Kehadiran kurang dari 75% | 
                                      <a class="text-primary">Amat Kurang </a>Kehadiran kurang dari 10 %.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_5a" name="nilai_5a" value="<?php if(isset($_POST['nilai_5a'])) echo $_POST["nilai_5a"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_5b"><h5 class="text-muted">B. Kesungguhan Dalam Memperbaiki Diri <small>(10 Muwashshofat)</small></h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Nampak perubahan sikap yang signifikan dan dapat menjadi teladan | 
                                      <a class="text-primary">Baik </a>Nampak perubahan sikap yang signifikan dan dapat menjadi teladan | 
                                      <a class="text-primary">Cukup </a>Nampak perubahan sikap dengan senantiasa terus memperbaiki diri | 
                                      <a class="text-primary">Sedang </a>Ada usaha untuk terus memperbaiki diri dengan terus belajar | 
                                      <a class="text-primary">Kurang </a>Mulai muncul kesadaran harus memperbaiki diri | 
                                      <a class="text-primary">Amat Kurang </a>Tidak nampak usaha memperbaiki diri dan terkesan santai dengan keadaan.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_5b" name="nilai_5b" value="<?php if(isset($_POST['nilai_5b'])) echo $_POST["nilai_5b"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_5c"><h5 class="text-muted">C. Kemampuan Tilawah Al-Quran</h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>Sangat fasih dan dapat diandalkan |
                                      <a class="text-primary">Baik </a>Dapat membaca dengan tajwid dan makhroj | 
                                      <a class="text-primary">Cukup </a>Mulai menyempurnakan bacaan dengan tajwid dan makhroj | 
                                      <a class="text-primary">Sedang </a>Ada usaha untuk dapat membaca dengan baik dan benar | 
                                      <a class="text-primary">Kurang </a>Terbata-bata.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_5c" name="nilai_5c" value="<?php if(isset($_POST['nilai_5c'])) echo $_POST["nilai_5c"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <!-- PEMBATAS ISI -->
                                <!-- PEMBATAS ISI -->
                                <div class="mb-4">
                                  <label for="nilai_5d"><h5 class="text-muted">D. Hafalan Al-Quran <small>(Target 1 juz pertahun)</small></h5></label>
                                    <div class="card mb-2">
                                      <div class="card-body" >
                                      <a class="text-primary">Amat Baik </a>lebih 1 juz dalam 1 tahun |
                                      <a class="text-primary">Baik </a>Tercapai 1 juz dalam 1 tahun | 
                                      <a class="text-primary">Cukup </a>Mencapai 75 %  juz hapalan 1 tahun | 
                                      <a class="text-primary">Sedang </a>Hafalan diatas 50 % - 74% juz dalam 1 tahun | 
                                      <a class="text-primary">Kurang </a>Dibawah 50% juz dalam 1 tahun.
                                      </div>
                                    </div>
                                  <div class="input-group">
                                    <input type="number" class="form-control" id="nilai_5d" name="nilai_5d" value="<?php if(isset($_POST['nilai_5d'])) echo $_POST["nilai_5d"];?>" 
                                    min="1" max="100" placeholder="Nilai antara 1-100" >
                                    <div class="input-group-append">
                                      <span class="input-group-text">Nilai</span>
                                    </div>
                                    <small class="text-muted">
                                      <a class="text-primary">Amat Baik </a>100 - 91 |
                                      <a class="text-primary">Baik </a>90 - 76 | 
                                      <a class="text-primary">Cukup </a>75 - 61 | 
                                      <a class="text-primary">Sedang </a>60 - 51 | 
                                      <a class="text-primary">Kurang </a>50 - 20 |
                                      <a class="text-primary">Amat Kurang </a>20 kebawah.
                                    </small>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Periksa kembali input anda.
                                    </div>
                                  </div>
                                </div>

                                <button type="reset" class="btn btn-secondary">Bersihkan</button>
                                <button class="btn btn-primary" type="submit">
                                Simpan Penilaian</button>
                                
                              </form>
                            </div>
                            <!-- tulisan untuk row data, bebas -->
              <!-- end modal body -->
              </div>
            <div class="modal-footer mb-4">
            </div>
            
            </div>
          </div>
        </div>
        
        <!--  ??php $this->load->view("admin/_partials/6modal.php") ?> -->
        <!-- Ini adalah script dari link internet -->
        <?php $this->load->view("_partials/7js.php") ?>


        <script>
            function deleteConfirm(url){
	            $('#btn-delete').attr('href', url);
	            $('#deleteModal').modal();
            }
        </script>
        <script>
          $(document).ready(function() {
            $(document).on('click', '#pilih', function() {
              // var this;
              var nik = $(this).data('nik');
              var user_id = $(this).data('id');
              var full_name = $(this).data('nama');
              var unit = $(this).data('unit');
              var photo = $(this).data('photo');
              var jabatan_pekerjaan = $(this).data('pekerjaan');
              $('#nilai_nik').val(nik);
              $('#nilai_id').val(user_id);
              $('#nilai_nama').val(full_name);
              $('#nilai_unit').val(unit);
              $('#nilai_photo').val(photo);
              $('#nilai_pekerjaan').val(jabatan_pekerjaan);
              $('#cari_pegawai').modal('hide');
            })
          })

        </script>
    </body>
</html>
