<body>

    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" > </a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('dashboard') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('dashboard/#about') ?>">PROFILE</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Info') ?>">GALLERY</a>
                    </li> -->
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo base_url('dashboard/#testimonial') ?>">ORGANIZATION STRUCTURE</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" onclick="window.open(this.href); return false;" href="https://access-quality.telkom.co.id/validasi_data_inventory/login.php">PERFORMANCE</a>
                    </li> 
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">PKL</a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="<?php echo base_url('Peserta_pkl/presensi') ?>">PRESENSI</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Peserta_pkl/cek_data_pkl') ?>">DAFTAR PESERTA PKL</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('dashboard/#contact') ?>">CONTACT</a>
                    </li>
                    
                </ul>
                
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
