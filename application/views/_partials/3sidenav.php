
<!-- UNTUK ADMIN -->
<?php if ($this->session->userdata('role') == 'admin' ) 
    { ?>
    
	<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <!-- Menu side navigation -->
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Overview Admin</div>
                <a class="nav-link" href="<?php echo base_url('index.php/admin') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                
                
                <!-- heading nav_bar -->
                <div class="sb-sidenav-menu-heading">Data</div>
                <!-- bagian penilaian -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                    Penilaian
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <!-- <a class="nav-link" href="<?php echo base_url('index.php/admin/data_penilaian') ?>">Data Penilaian</a> -->
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/proses_penilaian') ?> ">Proses Penilaian</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/approve_penilaian') ?> ">Approve Penilaian</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/penilaian_diterima') ?> ">Penilaian Diterima</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/penilaian_ditolak') ?> ">Penilaian Ditolak</a>
                    </nav>
                </div>
                <!-- bagian jabatan -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Jabatan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/data_jabatan') ?> ">Data Jabatan</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/pengajuan_jabatan') ?> ">Pengajuan Jabatan</a>
                    </nav>
                </div>
                <!-- bagian pewagai -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables" aria-expanded="false" aria-controls="collapseTables">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    Pegawai
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTables" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/data_pegawai') ?> ">Database Pegawai</a>
                    </nav>
                </div>
                                          
                <!-- bagian terakhir -->
                <div class="sb-sidenav-menu-heading">Akun</div>
                <a class="nav-link" href="<?php echo base_url('index.php/profile') ?> ">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Profile
                </a>
                <!-- selesai side_bar -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small white">Anda masuk sebagai:</div>
            <?php if($this->session->userdata('role') == 'admin') // Jika user yg login adalah pegawai
            {
                echo "Pejabat Yayasan";// Redirect ke halaman home untuk user
            }?>

            <?php if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah pegawai
            {
                echo "Kepala Sekolah";// Redirect ke halaman home untuk user
            }?>
            
            <?php if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah pegawai
            {
                echo "Pegawai";// Redirect ke halaman home untuk user
            }?>
        </div>
    </nav>
    </div>

<?php 
    } ?>

<!-- UNTUK KEPALA SEKOLAH -->
<?php if ($this->session->userdata('role') == 'kepsek' ) 
    { ?>
    
	<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <!-- Menu side navigation -->
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Overview Kepsek</div>
                <a class="nav-link" href="<?php echo base_url('index.php/kepsek') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                
                
                <!-- heading nav_bar -->
                <div class="sb-sidenav-menu-heading">Data</div>
                <!-- bagian penilaian -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                    Penilaian
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo base_url('index.php/kepsek/input_penilaian') ?>">Input Penilaian</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/kepsek/hasil_input') ?>">Hasil Input</a>
                        <!-- <a class="nav-link" href="<?php echo base_url('index.php/kepsek/data_penilaian') ?> ">Data Penilaian</a> -->
                    </nav>
                </div>
                <!-- bagian jabatan -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Jabatan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="<?php echo base_url('index.php/kepsek/pengajuan_jabatan') ?> ">Pengajuan Jabatan</a>
                        <!-- <a class="nav-link" href="<?php echo base_url('index.php/kepsek/pengajuan_jabatan') ?> ">Pengajuan Jabatan</a> -->
                    </nav>
                </div>
                <!-- bagian pewagai -->
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables" aria-expanded="false" aria-controls="collapseTables">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    Pegawai
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTables" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/data_pegawai') ?> ">Data Pegawai</a>
                    </nav>
                </div> -->
                                          
                <!-- bagian terakhir -->
                <div class="sb-sidenav-menu-heading">Akun</div>
                <a class="nav-link" href="<?php echo base_url('index.php/profile') ?> ">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Profile
                </a>
                <!-- selesai side_bar -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small white">Anda masuk sebagai:</div>
            <?php if($this->session->userdata('role') == 'admin') // Jika user yg login adalah pegawai
            {
                echo "Pejabat Yayasan";// Redirect ke halaman home untuk user
            }?>

            <?php if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah pegawai
            {
                echo "Kepala Sekolah";// Redirect ke halaman home untuk user
            }?>
            
            <?php if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah pegawai
            {
                echo "Pegawai";// Redirect ke halaman home untuk user
            }?>
        </div>
    </nav>
    </div>

<?php 
    } ?>

<!-- UNTUK PEGAWAI -->
<?php if ($this->session->userdata('role') == 'pegawai') 
    { ?>
    
	<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <!-- Menu side navigation -->
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Overview Pegawai</div>
                <a class="nav-link" href="<?php echo base_url('index.php/user') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                
                
                <!-- heading nav_bar -->
                <div class="sb-sidenav-menu-heading">Data</div>
                <!-- bagian penilaian -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                    Penilaian
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo base_url('index.php/user/data_penilaian') ?>">Data Penilaian</a>
                        <!-- <a class="nav-link" href="<?php echo base_url('index.php/user/proses_penilaian') ?> ">Proses Penilaian</a> -->
                    </nav>
                </div>
                <!-- bagian jabatan -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Jabatan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="<?php echo base_url('index.php/user/input_pengajuan') ?> ">Input Pengajuan</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/user/pengajuan_jabatan') ?> ">Overview Pengajuan</a>
                    </nav>
                </div>
                <!-- bagian pewagai -->
                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables" aria-expanded="false" aria-controls="collapseTables">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    Pegawai
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTables" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="<?php echo base_url('index.php/admin/data_pegawai') ?> ">Data Pegawai</a>
                    </nav>
                </div> -->
                                          
                <!-- bagian terakhir -->
                <div class="sb-sidenav-menu-heading">Akun</div>
                <a class="nav-link" href="<?php echo base_url('index.php/profile') ?> ">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Profile
                </a>
                <!-- selesai side_bar -->
            </div>
        </div>


        <div class="sb-sidenav-footer">
            <div class="small white">Anda masuk sebagai: </div>
            <?php if($this->session->userdata('role') == 'admin') // Jika user yg login adalah pegawai
            {
                echo "Pejabat Yayasan";// Redirect ke halaman home untuk user
            }?>

            <?php if($this->session->userdata('role') == 'kepsek') // Jika user yg login adalah pegawai
            {
                echo "Kepala Sekolah";// Redirect ke halaman home untuk user
            }?>
            
            <?php if($this->session->userdata('role') == 'pegawai') // Jika user yg login adalah pegawai
            {
                echo "Pegawai";// Redirect ke halaman home untuk user
            }?>

            


            
        </div>
    </nav>
    </div>

<?php 
    } ?>