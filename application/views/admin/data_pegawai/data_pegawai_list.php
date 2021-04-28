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

            <div id="layoutSidenav_content">
                <main>
                    <!-- masuk ke kontainer konten halaman -->
                    <div class="container-fluid"> 
                        <!-- ini nama judul halaman -->
                        <h1 class="mt-4">Database Pegawai</h1>


                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        <!-- ini untuk tulisan sukses, disini yaa -->
						<?php $this->load->view("_partials/8flash.php") ?>


                        <!-- sekarang masuk ke kolom isi konten -->
                        
                        <div class="row">
                        
                            <!-- Area tabel 1 -->
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Daftar Unit
                                        </div>
                                        <!-- #### -->
                                        <div>
                                        <a href="#unittabel" data-toggle="collapse">Hide</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive" id="unittabel" class="collapse">
                                            <a class="" data-toggle="modal" data-target="#addModalKecilUnit" href="#"><i class="fas fa-plus ">  </i>  Tambah Unit</a>
                                            <!-- data-toggle="modal" data-target="#logoutModal" href="<?= site_url('keluar2') ?>" -->
                                            <br>
                                            <div class="mb-3">
                                            </div>
                                            <table class="table table-hover table-bordered table-sm" id="dataPenginput" width="100%" cellspacing="0">


                                                <!-- buat head table -->
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Unit</th>
                                                        <th>Aksi</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <!-- buat foot -->
                                                <!-- <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        
                                                    </tr>
                                                </tfoot> -->
                                                <tbody>
                                                    <?php 
											        $no = 0;
											        foreach ($data_unit as $units): 
											        $no++;
				        					        ?>
                                                    <tr>
                                                        <td width="20">
                                                            <?php echo $no . "."; ?>
                                                        </td>
                                                        <td><?php echo $units["unit"]; ?>
                                                        </td>
                                                        <td width="10">
				        						        <?php $hey = $units["unit_id"];?>
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/data_pegawai/deleteunit/'. $hey ) ?>')"
				        							    href="#!" class="btn btn-sm text-danger"><i class="fas fa-trash"></i></a>
                                                        
                                                        </td>
                                                        
                                                    </tr>
                                                    

                                                    <?php endforeach; ?>
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    
                                    <!-- sss -->
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Daftar Tahun Penilaian
                                        </div>
                                        <!-- #### -->
                                        <div>
                                        <a href="#unittahun" data-toggle="collapse">Hide</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive" id="unittahun" class="collapse">
                                            <a class="" data-toggle="modal" data-target="#addModalKecilTahun" href="#"><i class="fas fa-plus ">  </i>  Tambah Tahun</a>
                                            <br >
                                            <div class="mb-3">
                                            </div>
                                            <table class="table table-hover table-bordered table-sm" id="dataPenginput" width="100%" cellspacing="0">


                                                <!-- buat head table -->
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Tahun</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <!-- buat foot -->
                                                <!-- <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        
                                                    </tr>
                                                </tfoot> -->
                                                <tbody>
                                                <?php 
											        $no = 0;
											        foreach ($data_tahun as $tahuns): 
											        $no++;
				        					        ?>
                                                    
                                                    <tr>
                                                        <td width="20">
                                                            <?php echo $no . "."; ?>
                                                        </td>
                                                        <td><?php echo $tahuns["tahun"]; ?>
                                                        </td>
                                                        <td width="10">
				        						        <?php $heys = $tahuns["tahun_id"];?>
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/data_pegawai/deletetahun/'. $heys ) ?>')"
				        							    href="#!" class="btn btn-sm text-danger"><i class="fas fa-trash"></i></a>
                                                        
                                                        </td>
                                                        
                                                    </tr>

                                                    <?php endforeach; ?>
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                    <!-- end of body -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    
                                    <!-- sss -->
                                </div>
                            </div>

                            <!-- aArea tabel 2 -->
                            <!-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Daftar Tahun Pendataan
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div> -->

                        </div>

                        
                        
                        
                        

                        <!-- area data tabel -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-users mr-1"></i>
                                Data Seluruh Pegawai
                            </div>

                            <!-- masuk ke card body -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <a href="<?php echo site_url('admin/data_pegawai/add') ?>"><i class="fas fa-plus "></i>  Tambah Pegawai</a>
                                    <br >
                                    <div class="mb-3">
                                    </div>
                                    <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
                                        
                                        <!-- buat head table -->
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIPY</th>
                                                <th>Unit</th>
                                                <th>Pangkat</th>
                                                <th>Pekerjaan</th>
                                                <th>Hak Akses</th>
                                                <th>Foto</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <!-- buat foot -->
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
											<?php 
											$no = 0;
											foreach ($data_pegawai as $data_pegawai): 
											$no++;
				        					?>
											<tr>
												<td>
													<?php echo $no . "."; ?>
												</td>
				        						<td width="20%">
				        							<!-- <?php echo $data_pegawai->full_name ?> -->
                                                    <a href="<?php echo site_url('admin/data_pegawai/lihat/'.$data_pegawai->user_id) ?>" class="text-primary">
                                                    <?php echo $data_pegawai->full_name?>
                                                    </a>
				        						</td>
				        						<td>
				        							<?php echo $data_pegawai->nik ?>
                                                </td>
                                                <td>
				        							<?php echo $data_pegawai->unit ?>
				        						</td>
				        						<td>
				        							<?php echo $data_pegawai->pangkat_gol ?>
                                                </td>
				        						<td>
				        							<?php echo $data_pegawai->jabatan_pekerjaan ?>
                                                </td>
                                                <td>
				        							<?php echo $data_pegawai->role ?>
				        						</td>



				        						<td>
				        							<img src="<?php echo base_url('upload/user/'.$data_pegawai->photo) ?>" width="64" />
				        						</td>


				        						<!-- <td width="100"> -->
				        						<!-- <td>
                                                    <?php echo substr($product->description, 0, 120) ?>
                                                    <?php echo $data_pegawai->created_at ?>
                                                </td> -->
				        						<td width="155" class="text-center">
                                                    <?php $admin = "821";
                                                    if ($data_pegawai->user_id != $admin) { ?>
                                                        <a href="<?php echo site_url('admin/data_pegawai/edit/'. $data_pegawai->user_id) ?>"
				        							 class="btn btn-sm"><i class="fas fa-edit"></i> Ubah</a>
				        							<a onclick="deleteConfirm('<?php echo site_url('admin/data_pegawai/delete/'. $data_pegawai->user_id) ?>')"
				        							 href="#!" class="btn btn-sm text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                    <?php } 
                                                    else { ?>
                                                        <span class="badge badge-secondary"> Developer Account </a></span>
                                                    <?php }?>
				        							
				        						</td>
				        					</tr>
				        					<?php endforeach; ?>
                                            
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
        
    </body>
</html>
