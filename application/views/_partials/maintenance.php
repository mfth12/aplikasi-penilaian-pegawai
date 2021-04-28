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
            <!-- ini mulai masuk ke konten halaman (sidenav_content) -->
            <div id="layoutSidenav_content">
                <main>
                    <!-- masuk ke kontainer konten halaman -->
                    <div class="container-fluid"> 
                        <!-- ini nama judul halaman -->
                        <h1 class="mt-4">Halaman Sedang Maintenance</h1>
                        <!-- ini nama bread crumb -->
                        <?php $this->load->view("_partials/4breadcrumb.php") ?>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                Mohon maaf atas ketidaknyamanannya, halaman ini sedang dalam proses konstruksi untuk sementara waktu.
                                <a href="#">Pelajari lebih lanjut</a>
                            </div>
                        </div>


                        <!-- sekarang masuk ke kolom isi konten -->
                        

                        

                            <!-- card body ended -->
                        <!-- </div> -->

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
