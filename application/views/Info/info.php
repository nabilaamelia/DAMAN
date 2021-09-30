<div class="p-3 mb-2 bg-dark text-white" style="height: 70px;"></div>
<div class= "mt-4">
    <!-- <a href=""> -->
        <div class="container">
            <?php foreach($infodaman as $info) : ?>
            <div class="card mt-2 md-2" >            
                <div class="row no-gutters col-md-12">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/images/info_pkl/'.$info->foto) ?>" width="40" height="200" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="<?php echo base_url('Info/detail/'.$info->id_info) ?>"><h5 class="text-dark"><?php echo $info->judul ?> </h5></a>                            
                            <p class="card-text"></p>
                            <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $awal  = date_create($info->waktu);
                                $akhir = date_create(); // waktu sekarang
                                $diff  = date_diff($awal, $akhir);

                                if ($diff->y != null) {
                                    $time = $diff->y . ' tahun ';
                                } elseif ($diff->m != null) {
                                    $time = $diff->m . ' bulan ';
                                } elseif ($diff->d != null) {
                                    $time = $diff->d . ' hari ';
                                } elseif ($diff->h != null) {
                                    $time = $diff->h . ' jam ';
                                } elseif ($diff->i != null) {
                                    $time = $diff->i . ' menit ';
                                } else {
                                    $time = $diff->s . ' detik ';
                                }
                            ?>
                            <p class="card-text"><small class="text-muted"><?= $time ?> lalu</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    <!-- </a> -->
    
</div>