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
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
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
                        <h1 class="mt-4">Proses Penilaian</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        


                        <!-- sekarang masuk ke kolom isi konten -->
                        <div class="row">
                            <!-- cards -->
                            
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Approve Penilaian</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/approve_penilaian') ?>">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Penilaian Diterima</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/penilaian_diterima') ?>">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Penilaian ditolak</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/penilaian_ditolak') ?>">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sekarang masuk ke kolom isi konten -->
                        

                        
                        <!-- ini untuk tulisan sukses, disini yaa -->
						<?php $this->load->view("_partials/8flash.php") ?>

                        <!-- area data tabel -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabel Penilaian
                            </div>


                            <!-- masuk ke card body -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
                                        
                                        <!-- buat head table -->
                                        <thead>
                                            <tr>
                                                <th width="25">No.</th>
                                                <th>Tanggal</th>
                                                <th>Penilai</th>
                                                <th>Dinilai</th>
                                                <th class="text-center">Unit</th>
                                                <th class="text-center">Tahun</th>
                                                <th class="text-center">Nilai</th>
                                                <th class="text-center">Keterangan</th>
                                                <th>Deskripsi Penilaian</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <!-- buat foot -->
                                        <!-- buat foot -->
                                        <!-- buat foot -->
                                        <!-- buat foot -->
                                        <tbody>
                                            <?php 
											$no = 0;
											foreach ($data_nilai as $data): 
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
                                                    <!-- <a href="<?php echo site_url('kepsek/hasil_input/lihat/'.$data->id_penilaian) ?>" class="text-dark"> -->
                                                    <?php echo $data->penginput_nama?>
                                                    <!-- </a> -->
                                                </td>
                                                <td>
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
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-secondary"> Pending Konfirmasi </span>
                                                        <?php }
                                                    if($data->status == 1) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-secondary"> Terkonfirmasi </span>
                                                        <?php } 
                                                    if($data->status == 2) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-secondary"> Ditanggapi Penilai </span>
                                                        <?php } 
                                                    if($data->status == 5) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-primary"> Disetujui Yayasan </span>
                                                        <?php } 
                                                    if($data->status == 6) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-danger"> Ditolak </span>
                                                        <?php } 
                                                    if($data->status == 7) { ?> 
                                                    <a href="<?php echo site_url('admin/proses_penilaian/lihat/'.$data->id_penilaian) ?>"><span class="badge badge-primary"> Diarsipkan </span>
                                                        <?php } 


                                                    ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <!-- end of body -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- card body ended -->
                        </div>


                    </div>
                </main>

                <!-- ini bagian footer  -->
                <?php $this->load->view("_partials/5footer.php") ?>
                        
                
                <!-- end footer -->
            </div>
            <!-- ini sudah selesai dari konten halaman (sidenav_content) -->
            <!-- ini sudah selesai dari konten halaman (sidenav_content) -->
            <!-- ini sudah selesai dari konten halaman (sidenav_content) -->
            <!-- ini sudah selesai dari konten halaman (sidenav_content) -->
            <!-- ini sudah selesai dari konten halaman (sidenav_content) -->
            <!-- ini sudah selesai dari konten halaman (sidenav_content) -->
        </div>


        <!-- modal -->
        <!-- modal untuk klik logout dari navbar-->
        <?php $this->load->view("_partials/6modal.php") ?>


        <!--  ??php $this->load->view("admin/_partials/6modal.php") ?> -->
        <!-- Ini adalah script dari link internet -->
        <?php $this->load->view("_partials/7js.php") ?>
    </body>
</html>
