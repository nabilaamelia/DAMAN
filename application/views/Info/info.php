<div class="p-3  bg-dark text-white" style="height: 80px;"></div>
<div class= " plans ">
    <!-- <a href=""> -->
        <div class="container ">
            <?php foreach($infodaman as $info) : ?>
                <div class="card mb-4" >            
                    <div class="row no-gutters col-md-12 mt-1">
                        <div class="col-md-4">
                            <?php if($info->foto !== "") : ?>
                                <center>
                                    <img src="<?= base_url('assets/images/info_pkl/'.$info->foto) ?>" width="10" height="150" class="card-img" alt="...">
                                </center>
                            <?php else : ?>
                                <center>
                                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/09/22/3820270727.png" width="10" height="150" class="card-img" alt="...">
                                </center>
                            <?php endif; ?>
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

        <div class="row">
            <div class="col">
            <?= $this->pagination->create_links(); ?>
            </div>
        </div>

</div>