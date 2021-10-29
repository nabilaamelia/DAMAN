<?php $role_id = $this->session->userdata('role_id'); ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primaryDark  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="<?php echo base_url() ?>assets/images/Telkom.png" width="50" alt="">
                <div class="sidebar-brand-text mx-3">DAMAN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/cek_data_pkl') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>DATA PESERTA</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/cek_data_pengurus') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>STRUKTUR ORGANISASI</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/cek_info_daman') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>INFO DAMAN</span>
                </a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/presensi_peserta') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>PRESENSI PESERTA</span>
                </a>
            </li>
            <?php if($role_id == 1) : ?> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/data_admin') ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>ADMIN</span>
                    </a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/data_admin') ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>GANTI PASSWORD</span>
                    </a>
                </li>
            <?php endif; ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar  navbar-expand navbar-light  topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>  

                <ul class="na navbar-nav navbar-right">

                    <li><div>Selamat Datang</div></li>
                    <li class="ml-2"><?php echo anchor('Login/logout','Logout') ?></li>

                    <!-- <li><?php echo anchor('Admin/login','Login'); ?></li> -->



                </ul> 

            </ul>

        </nav> 

