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
        
        <?php 
        // untuk keamanan data
        // untuk keamanan data
        // untuk keamanan data
        // untuk keamanan data
        // untuk keamanan data
		if ($nilai_kamu->user_id != $this->session->userdata('user_id')) show_404(); // tampilkan error jika mengakses penilaian orang lain
        ?>
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
                        <h1 class="mt-4">Detail Penilaian</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        <!-- ini untuk tulisan sukses, disini yaa -->
						<?php $this->load->view("_partials/8flash.php") ?>
<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 0) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                        <div class="card mb-4">
                            <div class="card-body">
                                Silakan konfirmasi dan berikan tanggapan atas penilaian yang anda terima. Boleh berupa tanggapan yang membangun maupun berupa komplain.
                                <a href="#">Pelajari lebih lanjut</a>
                            </div> <!-- tutup card -->
                        </div>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 

<?php
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 1) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                        <div class="card mb-4">
                            <div class="card-body">
                                Data penilaian anda sudah dikonfirmasi. Sekarang sedang menunggu tanggapan dan persetujuan dari kepala sekolah.
                                <a href="#">Pelajari lebih lanjut</a>
                            </div> <!-- tutup card -->
                        </div>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 

<?php
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 2) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                        <div class="card mb-4">
                            <div class="card-body">
                                Penilaian anda sudah disetujui Kepala Sekolah. Sekarang sedang dalam proses meminta keputusan dari yayasan. Bisa diterima, dan juga bisa ditolak penilaian ini.
                                <a href="#">Pelajari lebih lanjut</a>
                            </div> <!-- tutup card -->
                        </div>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 


<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 5) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                        <div class="card mb-4">
                            <div class="card-body">
                            Penilaian ini sudah disetujui oleh yayasan.
                                <a href="#">Pelajari lebih lanjut</a>
                            </div> <!-- tutup card -->
                        </div>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 


<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 6) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                        <div class="card mb-4">
                            <div class="card-body">
                            Penilaian ini tidak disetujui oleh yayasan.
                                <a href="#">Pelajari lebih lanjut</a>
                            </div> <!-- tutup card -->
                        </div>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 
                        <!-- sekarang masuk ke kolom isi konten -->
              
                        <div class="row">
                          

                            
            
                            <div class="col-md-8 order-md-1"><!--   -->
                              <!-- <h4 class="mb-3">Detail Penilaian</h4> -->
          <div class="card mb-4">
          <div class="card-header">

						<a href="<?php echo site_url('user/data_penilaian') ?>"><i class="fas fa-arrow-left"></i>
							Kembali</a>
					</div>
            <div class="card-body">
                              <!-- <form class="needs-validation" action="<?php echo site_url('kepsek/input_penilaian/kirim') ?>" method="post" enctype="multipart/form-data"> -->
                              
                                
                                <!-- Hasil masukan dari modal -->
                                
                                <h5 class="text-muted">Detail Penilaian</h5>
                <div class="card mb-4">
                    <div class="card-body">
                                <div class="row">
                                  <!-- diatas  -->
                                  <div class="col-md-6 mb-1">
                                    <label for="nama">Nama Lengkap :</label>
                                    <h6 id="nama"><em><?php echo $nilai_kamu->full_name?></em></h6>
                                  </div>
                                  <div class="col-md-6 mb-1">
                                    <label for="unit">Unit :</label>
                                    <h6 id="unit"><em><?php echo $nilai_kamu->unit?></em></h6>
                                  </div>
                                  <!--  -->
                                </div>
                                <div class="row">
                                  <!-- diatas  -->
                                  <div class="col-md-6">
                                    <label for="tahun">Tahun Penilaian :</label>
                                    <h6 id="tahun"><em><?php echo $nilai_kamu->tahun?></em></h6>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="penilai">Atasan Penilai :</label>
                                    <h6 id="penilai"><em><?php echo $nilai_kamu->penginput_nama?></em></h6>
                                  </div>
                                  <!--  -->
                                </div>
                                <div class="row">
                                  <!-- diatas  -->
                                  <div class="col-md-6">
                                    <label for="total">Akumulasi Semua Penilaian : <em><b><?php echo $nilai_kamu->avg_semua?></b></em></label>
                                    <h6 id="total"><?php if($nilai_kamu->avg_semua <= 100 && $nilai_kamu->avg_semua > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_semua <= 90 && $nilai_kamu->avg_semua > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_semua <= 75 && $nilai_kamu->avg_semua > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_semua <= 60 && $nilai_kamu->avg_semua > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_semua <= 50 && $nilai_kamu->avg_semua >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_semua < 20 && $nilai_kamu->avg_semua >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?></h6>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="penilai">Status Penilaian :</label>
                                    <h6><?php 
                                                    // if($data->avg_semua == 51.05) {echo "Lulus";}
                                                    if($nilai_kamu->status == 0) { ?> 
                                                    <span class="badge badge-secondary">Pending Konfirmasi</span>
                                                        <?php }
                                                    if($nilai_kamu->status == 1) { ?> 
                                                    <span class="badge badge-secondary">Terkonfirmasi</span>
                                                        <?php } 
                                                    if($nilai_kamu->status == 2) { ?> 
                                                    <span class="badge badge-secondary">Ditanggapi Penilai</span>
                                                        <?php } 
                                                    if($nilai_kamu->status == 5) { ?> 
                                                    <span class="badge badge-primary">Disetujui Yayasan</span>
                                                        <?php } 
                                                    if($nilai_kamu->status == 6) { ?> 
                                                    <span class="badge badge-danger">Ditolak</span>
                                                        <?php } 
                                                    if($nilai_kamu->status == 7) { ?> 
                                                    <span class="badge badge-primary">Diarsipkan</span>
                                                        <?php } 


                                                    ?></h6>
                                  </div>
                                  <!--  -->

                                  
                                </div>

                                <div class="row">
                                  <!-- diatas  -->
                                  <div class="col-md-6">
                                    <label for="tahun">Dinilai pada tanggal :</label>
                                    <h6 id="tahun"><em><?php echo date('l, d F Y', strtotime($nilai_kamu->tgl_penilaian))?></em></h6>
                                  </div>
                                  <!--  -->
                                </div>
                                <!-- end card -->
                    </div> 
                </div>









                                    <div class="d-flex justify-content-between">
                                        <div><h5 class="text-muted">Detail Nilai</h5>
                                        </div>
                                        <!-- #### -->
                                        <div><a href="#detail_nilai" data-toggle="collapse">Sembunyikan</a>
                                        </div>
                                    </div>
                <div class="card mb-4">
                    <div class="card-body" id="detail_nilai">
                                <!-- Hasil masukan dari modal -->
                                
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="cc-name">1. Kesetiaan <?php if($nilai_kamu->avg_nilai_1 <= 100 && $nilai_kamu->avg_nilai_1 > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_1 <= 90 && $nilai_kamu->avg_nilai_1 > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_1 <= 75 && $nilai_kamu->avg_nilai_1 > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_1 <= 60 && $nilai_kamu->avg_nilai_1 > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_1 <= 50 && $nilai_kamu->avg_nilai_1 >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_1 < 20 && $nilai_kamu->avg_nilai_1 >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?></label> 
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 1A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 1B" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_1a" 
                                      value="<?php echo $nilai_kamu->nilai_1a?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_1b"
                                      value="<?php echo $nilai_kamu->nilai_1b?>"
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
                                    <label for="cc-name">2. Paedagogis <?php if($nilai_kamu->avg_nilai_2 <= 100 && $nilai_kamu->avg_nilai_2 > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_2 <= 90 && $nilai_kamu->avg_nilai_2 > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_2 <= 75 && $nilai_kamu->avg_nilai_2 > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_2 <= 60 && $nilai_kamu->avg_nilai_2 > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_2 <= 50 && $nilai_kamu->avg_nilai_2 >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_2 < 20 && $nilai_kamu->avg_nilai_2 >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?></label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 2D" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_2a"
                                      value="<?php echo $nilai_kamu->nilai_2a?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_2b"
                                      value="<?php echo $nilai_kamu->nilai_2b?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_2c" 
                                      value="<?php echo $nilai_kamu->nilai_2c?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_2d" 
                                      value="<?php echo $nilai_kamu->nilai_2d?>"
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
                                    <label for="cc-name">3. Profesi <?php if($nilai_kamu->avg_nilai_3 <= 100 && $nilai_kamu->avg_nilai_3 > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_3 <= 90 && $nilai_kamu->avg_nilai_3 > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_3 <= 75 && $nilai_kamu->avg_nilai_3 > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_3 <= 60 && $nilai_kamu->avg_nilai_3 > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_3 <= 50 && $nilai_kamu->avg_nilai_3 >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_3 < 20 && $nilai_kamu->avg_nilai_3 >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?></label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 3D" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_3a" 
                                      value="<?php echo $nilai_kamu->nilai_3a?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_3b" 
                                      value="<?php echo $nilai_kamu->nilai_3b?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_3c" 
                                      value="<?php echo $nilai_kamu->nilai_3c?>"
                                      />
                                      <input class="form-control" readonly type="number" name="nilai_3d" 
                                      value="<?php echo $nilai_kamu->nilai_3d?>"
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
                                    <label for="cc-name">4. Organisasi <?php if($nilai_kamu->avg_nilai_4 <= 100 && $nilai_kamu->avg_nilai_4 > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_4 <= 90 && $nilai_kamu->avg_nilai_4 > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_4 <= 75 && $nilai_kamu->avg_nilai_4 > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_4 <= 60 && $nilai_kamu->avg_nilai_4 > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_4 <= 50 && $nilai_kamu->avg_nilai_4 >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_4 < 20 && $nilai_kamu->avg_nilai_4 >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?></label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4D" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 4E" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_4a"
                                      value="<?php echo $nilai_kamu->nilai_4a?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4b"
                                      value="<?php echo $nilai_kamu->nilai_4b?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4c"
                                      value="<?php echo $nilai_kamu->nilai_4c?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4d"
                                      value="<?php echo $nilai_kamu->nilai_4d?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_4e"
                                      value="<?php echo $nilai_kamu->nilai_4e?>"
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

                                <div class="row">
                                  <div class="col mb-3">
                                
                                    <label for="cc-name">5. Personal Religius <?php if($nilai_kamu->avg_nilai_5 <= 100 && $nilai_kamu->avg_nilai_5 > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_5 <= 90 && $nilai_kamu->avg_nilai_5 > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_5 <= 75 && $nilai_kamu->avg_nilai_5 > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_5 <= 60 && $nilai_kamu->avg_nilai_5 > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_5 <= 50 && $nilai_kamu->avg_nilai_5 >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($nilai_kamu->avg_nilai_5 < 20 && $nilai_kamu->avg_nilai_5 >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?></label>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5A" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5B" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5C" />
                                      <input class="form-control" readonly type="text" placeholder="Nilai 5D" />
                                    </div>
                                    <div class="input-group">
                                      <input class="form-control" readonly type="number" name="nilai_5a" 
                                      value="<?php echo $nilai_kamu->nilai_5a?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_5b" 
                                      value="<?php echo $nilai_kamu->nilai_5b?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_5c" 
                                      value="<?php echo $nilai_kamu->nilai_5c?>"
                                       />
                                      <input class="form-control" readonly type="number" name="nilai_5d" 
                                      value="<?php echo $nilai_kamu->nilai_5d?>"
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
                    </div> <!-- tutup card -->
                </div>
<!-- FORM UNTUK STATUS 0 -->
<!-- FORM UNTUK STATUS 0 -->
<!-- FORM UNTUK STATUS 0 -->
<!-- FORM UNTUK STATUS 0 -->

<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 0) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                            <form class="needs-validation" action="<?php echo site_url('user/data_penilaian/proses_konfirmasi/'.$nilai_kamu->id_penilaian) ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="nilai_tambahan">Deskripsi Penilaian</label>
						            <textarea rows="6" readonly class="form-control" name="nilai_tambahan"><?php echo $nilai_kamu->teks_penilai?></textarea>
						            </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keberatan Pegawai</label>
						            <textarea rows="5"  class="form-control" name="komplain_pegawai" required placeholder="Tuliskan keberatan anda terkait penilaian (jika ada). Jika dirasa tidak keberatan silakan untuk menulis 'tidak keberatan' dikolom ini."></textarea>
						            </div>
                                </div>
                                <div class="row">
                                    <input class="form-control" hidden required value="<?php echo $nilai_kamu->status?>" type="text" name="status" />
                                </div>
                                
                                <div class="mb-2">
                                <small><a class="text-primary">Catatan: </a>Harap menuliskan tanggapan anda pada kolom keberatan pegawai.</small>
                                </div>
                                <hr>
                                <button class="btn btn-secondary" type="reset">Bersihkan</button>
                                <button class="btn btn-primary" type="submit">Konfirmasi  <i class="fas fa-arrow-right"> </i> </button>
                            </form>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 
<!-- FORM UNTUK STATUS 1 -->
<!-- FORM UNTUK STATUS 1 -->
<!-- FORM UNTUK STATUS 1 -->
<!-- FORM UNTUK STATUS 1 -->

<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 1) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                            <form class="needs-validation" action="<?php echo site_url('user/data_penilaian/proses_konfirmasi/'.$nilai_kamu->id_penilaian) ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="nilai_tambahan">Deskripsi Penilaian</label>
						            <textarea rows="6" readonly class="form-control" name="nilai_tambahan"><?php echo $nilai_kamu->teks_penilai?></textarea>
						            </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keberatan Pegawai</label>
						            <textarea rows="5" readonly class="form-control" name="komplain_pegawai"> <?php echo $nilai_kamu->teks_pegawai?></textarea>
						            </div>
                                </div>
                                <div class="row">
                                    <input class="form-control" hidden required value="<?php echo $nilai_kamu->status?>" type="text" name="status" />
                                </div>
                                
                                <div class="mb-2">
                                <small><a class="text-primary">Keterangan: </a>Penilaian sedang dalam proses persetujuan dari Kepala Sekolah. Harap menunggu.</small>
                                </div>
                                <hr>
                                <button class="btn btn-secondary" disabled type="reset">Bersihkan</button>
                                <button class="btn btn-primary" disabled type="submit">Sudah Dikonfirmasi</button>
                            </form>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 


<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 2) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                            <form class="needs-validation" action="<?php echo site_url('user/data_penilaian/proses_konfirmasi/'.$nilai_kamu->id_penilaian) ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="nilai_tambahan">Deskripsi Penilaian</label>
						            <textarea rows="6" readonly class="form-control" name="nilai_tambahan"><?php echo $nilai_kamu->teks_penilai?></textarea>
						            </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keberatan Pegawai</label>
						            <textarea rows="5" readonly class="form-control" name="komplain_pegawai"> <?php echo $nilai_kamu->teks_pegawai?></textarea>
						            </div>
                                </div>
                                
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Tanggapan Penilai</label>
						            <textarea rows="5" readonly class="form-control" name="tanggapan_penilai"> <?php echo $nilai_kamu->teks_tgp_penilai?></textarea>
						            </div>
                                </div>

                                <div class="row">
                                    <input class="form-control" hidden required value="<?php echo $nilai_kamu->status?>" type="text" name="status" />
                                </div>
                                
                                <div class="mb-2">
                                <small><a class="text-primary">Keterangan: </a>Penilaian anda sudah disetujui oleh Kepala Sekolah. Sekarang sedang diajukan ke yayasan untuk diterima/ditolak penilaian anda.</small>
                                </div>
                                <hr>
                                <!-- <button class="btn btn-secondary" disabled type="reset">Bersihkan</button> -->
                                <button class="btn btn-primary" disabled type="submit">Menunggu diterima</button>
                            </form>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 
                              
                    

<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 5) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                            <form class="needs-validation" action="<?php echo site_url('admin/proses_penilaian/proses_setujui/'.$nilai_kamu->id_penilaian) ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="nilai_tambahan">Deskripsi Penilaian</label>
						            <textarea rows="6" readonly class="form-control" name="nilai_tambahan"><?php echo $nilai_kamu->teks_penilai?></textarea>
						            </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keberatan Pegawai</label>
						            <textarea rows="5" readonly class="form-control" name="komplain_pegawai"> <?php echo $nilai_kamu->teks_pegawai?></textarea>
						            </div>
                                </div>
                                
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Tanggapan Penilai</label>
						            <textarea rows="5" readonly class="form-control" name="tanggapan_penilai"> <?php echo $nilai_kamu->teks_tgp_penilai?></textarea>
						            </div>
                                </div>
                                
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keputusan yayasan</label>
						            <textarea rows="5" readonly class="form-control" name="keputusan_yayasan"><?php echo $nilai_kamu->teks_yayasan?></textarea>
						            </div>
                                </div>

                                

                                <div class="row">
                                    <input class="form-control" hidden required value="<?php echo $nilai_kamu->status?>" type="text" name="status" />
                                </div>
                                
                                <div class="mb-2">
                                <small><a class="text-primary">Catatan: </a>Penilaian ini sudah disetujui oleh yayasan.</small>
                                </div>
                                <!-- <button class="btn btn-secondary" type="reset">Bersihkan</button> -->
                                <!-- <button class="btn btn-primary" type="submit">Berikan Keputusan <i class="fas fa-arrow-right"> </i> </button> -->
                            </form>
                                <button class="btn btn-primary" onclick="window.print()">Cetak</button>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 

<?php 
// if($data->avg_semua == 51.05) {echo "Lulus";}
if($nilai_kamu->status == 6) 
{?>  
<!-- MENAMPILKAN OPSI UNTUK YANG BELUM KONFIRMASI -->
                            <form class="needs-validation" action="<?php echo site_url('admin/proses_penilaian/proses_setujui/'.$nilai_kamu->id_penilaian) ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="nilai_tambahan">Deskripsi Penilaian</label>
						            <textarea rows="6" readonly class="form-control" name="nilai_tambahan"><?php echo $nilai_kamu->teks_penilai?></textarea>
						            </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keberatan Pegawai</label>
						            <textarea rows="5" readonly class="form-control" name="komplain_pegawai"> <?php echo $nilai_kamu->teks_pegawai?></textarea>
						            </div>
                                </div>
                                
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Tanggapan Penilai</label>
						            <textarea rows="5" readonly class="form-control" name="tanggapan_penilai"> <?php echo $nilai_kamu->teks_tgp_penilai?></textarea>
						            </div>
                                </div>
                                
                                <div class="row">
                                  <div class="form-group col mb-3">
						            <label for="komplain_pegawai">Keputusan yayasan</label>
						            <textarea rows="5" readonly class="form-control" name="keputusan_yayasan"><?php echo $nilai_kamu->teks_yayasan?></textarea>
						            </div>
                                </div>

                                

                                <div class="row">
                                    <input class="form-control" hidden required value="<?php echo $nilai_kamu->status?>" type="text" name="status" />
                                </div>
                                
                                <div class="mb-2">
                                <small><a class="text-primary">Catatan: </a>Penilaian ini tidak disetujui oleh yayasan.</small>
                                </div>
                                <!-- <button class="btn btn-secondary" type="reset">Bersihkan</button> -->
                                <!-- <button class="btn btn-primary" type="submit">Berikan Keputusan <i class="fas fa-arrow-right"> </i> </button> -->
                            </form>
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
    <!-- END OF OPSI UNTUK YANG BELUM KONFIRMASI -->
<?php }?> 
                              



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
