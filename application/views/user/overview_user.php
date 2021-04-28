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
            <div id="layoutSidenav_content">
                <main>
                    <!-- masuk ke kontainer konten halaman -->
                    <div class="container-fluid"> 
                        <!-- ini nama judul halaman -->
                        <h1 class="mt-4">Dashboard</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        


                        <!-- sekarang masuk ke kolom isi konten -->
                        <div class="row">
                            

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Penilaian Terhadap Anda</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url('user/data_penilaian/') ?>">Lihat Detail</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        
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
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
        </div>


        <!-- modal -->
        <!-- modal untuk klik logout dari navbar-->
        <?php $this->load->view("_partials/6modal.php") ?>


        <!--  ??php $this->load->view("admin/_partials/6modal.php") ?> -->
        <!-- Ini adalah script dari link internet -->
        <?php $this->load->view("_partials/7js.php") ?>
    </body>



    <!-- end of HTML  -->
</html>
