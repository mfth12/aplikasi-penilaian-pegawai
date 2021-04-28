<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark"> 


    <button class="btn btn-link ml-2 " id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <a class="navbar-brand" href="<?php echo base_url('index.php') ?>">Sistem Pegawai Al-Madinah</a> 
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            
            <!-- <input class="form-control" type="text" placeholder="Cari sesuatu disini..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-light" type="button"><i class="fas fa-search"></i></button>
            </div> -->
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> 
            <!-- <img src="<?php echo base_url(); ?>upload/user/<?php echo $this->session->userdata('photoanda'); ?>" class="img-circle-small" alt="User Image" />  -->
            <?php echo $this->session->userdata('nama'); ?> </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('index.php/profile') ?>">Profile Pegawai</a>
                <a class="dropdown-item disabled" href="<?php echo base_url('index.php/admin/products') ?>">Credits</a>
                <a class="dropdown-item disabled" href="<?php echo base_url('index.php/about') ?>">Bantuan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="<?= site_url('keluar2') ?>">Keluar</a>
            </div>
        </li>
    </ul>
    
</nav>