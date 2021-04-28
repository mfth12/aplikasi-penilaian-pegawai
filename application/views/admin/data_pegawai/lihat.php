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
		$admin = "admin";
		if ($this->session->userdata('role') != $admin) show_404(); // tampilkan error jika mengakses penilaian orang lain selain anda
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
                        <h1 class="mt-4">Detail Pegawai</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        <!-- ini untuk tulisan sukses, disini yaa -->
						<?php $this->load->view("_partials/8flash.php") ?>

                        <!-- sekarang masuk ke kolom isi konten -->
        <div class="row">
      <div class="col-md-4 order-md-2" >
      <!-- order-md-2 mb-4 -->
      <!-- <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3sd</span>
      </h4> -->
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div class="my-1">
            <img src="<?php echo base_url('upload/user/'.$nilai_kamu->photo)?>" class="img-fluid"/>
          </div>
        </li>
        

        <li class="list-group-item d-flex justify-content-between bg-light">
          <div>
            <h6 class="my-0">Terdaftar pada:</h6>
            <small class="text-muted"><?php echo date('l, d F Y', strtotime($nilai_kamu->created_at))?></small>
          </div>
          <span class="text-muted"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div>
            <h6 class="my-0">Akses login terakhir:</h6>
            <small class="text-muted"><?php echo date('l, d F Y', strtotime($nilai_kamu->last_login))?></small>
          </div>
          <span class="text-muted"></span>
        </li>

        
      </ul>
    </div> 


                        <!-- <div class="row"> -->
                          

                            
            
                            <div class="col-md-8 order-md-1"><!--   -->
                              <!-- <h4 class="mb-3">Detail Penilaian</h4> -->
          <div class="card mb-4">
          <div class="card-header">

						<a href="<?php echo site_url('admin/data_pegawai') ?>"><i class="fas fa-arrow-left"></i>
							Kembali</a>
					</div>
            <div class="card-body">
                              <!-- <form class="needs-validation" action="<?php echo site_url('kepsek/input_penilaian/kirim') ?>" method="post" enctype="multipart/form-data"> -->
                              
                                
                                <!-- Hasil masukan dari modal -->
                                
                                <h5 class="text-muted">Detail Biodata Pegawai</h5>
                <div class="card mb-4">
                    <div class="card-body">
                                <div class="row mb-2">
                                  <!-- diatas  -->
                                  <div class="col-md-6 mb-1">
                                    <label for="nama">NIPY :</label>
                                    <h6 id="nama"><em><?php echo $nilai_kamu->nik?></em></h6>
                                  </div>
                                  <div class="col-md-6 mb-1">
                                    <label for="unit">Hak Akses :</label>
                                    <h6 id="unit"><em><?php if($nilai_kamu->role == 'admin') echo "Pejabat Yayasan";?><?php if($nilai_kamu->role == 'pegawai') echo "Pegawai";?><?php if($nilai_kamu->role == 'kepsek') echo "Kepala Sekolah";?></em></h6>
                                    <!-- <h6 id="unit"><em><?php echo $nilai_kamu->role?></em></h6> -->
                                  </div>
                                  <!--  -->
                                </div>

                                
                                <div class="row mb-2">
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


                                <div class="row mb-2">
                                  <!-- diatas  -->
                                  <div class="col-md-6">
                                    <label for="pangkat_gol">Pangkat/Golongan :</label>
                                    <h6 id="pangkat_gol"><em><?php 
                                      if (empty($nilai_kamu->pangkat_gol)) { //ini jika kolom email kosong
                                        echo "(Belum ada data)";
                                    } else { // dan jika berisi inputan data
                                      echo $nilai_kamu->pangkat_gol; //maka akan tetap 
                                    }?></em></h6>
                                  </div>
                                </div>
                                <div class="row mb-2">
                                  <!-- diatas  -->
                                  <div class="col-md-6">
                                    <label for="jabatan_pekerjaan">Pekerjaan :</label>
                                    <h6 id="jabatan_pekerjaan"><em><?php 
                                      if (empty($nilai_kamu->jabatan_pekerjaan)) { //ini jika kolom email kosong
                                        echo "(Belum ada data)";
                                    } else { // dan jika berisi inputan data
                                      echo $nilai_kamu->jabatan_pekerjaan; //maka akan tetap 
                                    }?></em></h6>
                                  </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                      <label for="email">Tempat, Tanggal Lahir</label> <!-- <span class="text-muted">(Optional)</span> -->
                                      <h6 id="email"><em><?php 
                                        if (!empty($nilai_kamu->tempat) && !empty($nilai_kamu->tgl_lahir)) { //ini jika kolom email kosong
                                            $nilai_kamu->tampil_tgl = date('d F Y', strtotime($nilai_kamu->tgl_lahir));
                                            echo $nilai_kamu->tempat.", ".$nilai_kamu->tampil_tgl;
                                        } else { // dan jika berisi inputan data
                                            echo "(Belum ada data)"; //maka akan tetap 
                                        }?></em></h6>
                                    </div>
                                </div>
                                
                                        <div class="row mb-2">
                                          <!-- diatas  -->
                                          <div class="col-md-6">
                                            <label for="email">Email :</label>
                                            <h6 id="email"><em><?php 
                                              if (empty($nilai_kamu->email)) { //ini jika kolom email kosong
                                                echo "(Belum ada data)";
                                            } else { // dan jika berisi inputan data
                                              echo $nilai_kamu->email; //maka akan tetap 
                                            }?></em></h6>
                                          </div>
                                        </div>
                                
                                        <div class="row mb-2">
                                          <!-- diatas  -->
                                          <div class="col-md-6">
                                            <label for="phone">Nomor Handphone :</label>
                                            <h6 id="phone"><em><?php 
                                              if (empty($nilai_kamu->phone)) { //ini jika kolom email kosong
                                                echo "(Belum ada data)";
                                            } else { // dan jika berisi inputan data
                                              echo $nilai_kamu->phone; //maka akan tetap 
                                            }?></em></h6>
                                          </div>
                                        </div>

                                
                                
                                <!-- end card -->
                                <!-- end card -->
                                <!-- end card -->
                                <!-- end card -->
                                <!-- end card -->
                    </div> 
                </div>









                                    <div class="d-flex justify-content-between">
                                        <div><h5 class="text-muted">Detail Penilaian</h5>
                                        </div>
                                        <!-- #### -->
                                        <div><a href="#detail_nilai" data-toggle="collapse">Sembunyikan</a>
                                        </div>
                                    </div>
                <div class="card mb-4">
                    <div class="card-body" id="detail_nilai">
                                <!-- Hasil masukan dari modal -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
                                        
                                        <!-- buat head table -->
                                        <thead>
                                            <tr>
                                                <th width="25">No.</th>
                                                <th>Tanggal</th>
                                                <th>Atasan Penilai</th>
                                                <th>Dinilai</th>
                                                <th class="text-center">Unit</th>
                                                <th class="text-center">Tahun</th>
                                                <th class="text-center">Nilai</th>
                                                <th class="text-center">Ket.</th>
                                                <th>Deskripsi Penilaian</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <!-- batass -->
                                        <!-- batass -->
                                        <!-- batass -->
                                        <!-- batass -->
                                        <tbody>
                                            <?php 
											$no = 0;
											foreach ($data_nilai_kamu as $data): 
											$no++;
				        					?>
                                            <tr>
                                                <td class="text-center">
													<?php echo $no . "."; ?>
                                                </td>
                                                <td>
													<?php echo date('l, d F Y', strtotime($data->tgl_penilaian)); ?>
                                                </td>
                                                <td>
                                                    <!-- <a href="<?php echo site_url('user/data_penilaian/lihat/'.$data->id_penilaian) ?>" class="text-dark"> -->
                                                    <?php echo $data->penginput_nama?>
                                                    <!-- </a> -->
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data->full_name?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data->unit?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data->tahun?>
                                                </td>
                                                <td class="text-center" >
                                                    <?php echo $data->avg_semua?>
                                                </td>
                                                <td>
                                                    <?php if($data->avg_semua <= 100 && $data->avg_semua > 90) {
                                                        ?><span class="badge badge-success"> Amat Baik </span><?php
                                                    }?>
                                                    <?php if($data->avg_semua <= 90 && $data->avg_semua > 75) {
                                                        ?><span class="badge badge-success"> Baik </span><?php
                                                    }?>
                                                    <?php if($data->avg_semua <= 75 && $data->avg_semua > 60) {
                                                        ?><span class="badge badge-success"> Cukup </span><?php
                                                    }?>
                                                    <?php if($data->avg_semua <= 60 && $data->avg_semua > 50) {
                                                        ?><span class="badge badge-warning"> Sedang </span><?php
                                                    }?>
                                                    <?php if($data->avg_semua <= 50 && $data->avg_semua >= 20) {
                                                        ?><span class="badge badge-warning"> Kurang </span><?php
                                                    }?>
                                                    <?php if($data->avg_semua < 20 && $data->avg_semua >= 1) {
                                                        ?><span class="badge badge-danger"> Amat Kurang </span><?php
                                                    }?>
                                                </td>
                                                <td class="small">
                                                    <?php echo substr($data->teks_penilai, 0, 100)?>
                                                </td>
                                                <td class="text-center">
                                                    <?php 
                                                    // if($data->avg_semua == 51.05) {echo "Lulus";}
                                                    if($data->status == 0) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-secondary"> Pending Konfirmasi </a></span>
                                                        <?php }
                                                    if($data->status == 1) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-secondary"> Terkonfirmasi </a></span>
                                                        <?php } 
                                                    if($data->status == 2) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-secondary"> Ditanggapi Penilai </a></span>
                                                        <?php } 
                                                    if($data->status == 5) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-primary"> Disetujui Yayasan </a></span>
                                                        <?php } 
                                                    if($data->status == 6) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-danger"> Ditolak </a></span>
                                                        <?php } 
                                                    if($data->status == 7) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-primary"> Diarsipkan </a></span>
                                                        <?php } 


                                                    ?>
                                                </td>
                                            </tr>
                                            
				        					<?php endforeach; ?>
                                            
                                            <!-- end of body -->
                                        </tbody>
                                    </table>
                                </div>        
                            
                    </div> <!-- tutup card -->
                </div>




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
