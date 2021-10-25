<?php $role_id = $this->session->userdata('role_id'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard <?php echo $this->session->userdata('role_id'); ?></h1>
<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Peserta 2 <?php echo $this->session->userdata('role_id'); ?></div>
                        <?php
                        $jumlah = 0;
                        foreach($datapkl as $pkl) {
                            $jumlah ++;
                        }

                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah; ?></div>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo base_url('admin/data_pkl') ?>"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Pengurus</div>
                        <?php
                        $jumlah = 0;
                        foreach($datapengurus as $peng) {
                            $jumlah ++;
                        }

                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah; ?></div>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo base_url('admin/data_pengurus') ?>"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Informasi
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <?php
                                $jumlah = 0;
                                foreach($infodaman as $info) {
                                    $jumlah ++;
                                }

                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo base_url('admin/info_daman') ?>"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Presensi</div>
                        <?php
                        $jumlah = 0;
                        foreach($presensi as $pres) {
                            $jumlah ++;
                        }

                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah; ?></div>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo base_url('admin/presensi_peserta') ?>"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>