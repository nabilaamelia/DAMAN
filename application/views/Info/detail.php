<div class="p-3 mb-2 bg-dark text-white" style="height: 70px;"></div>
<div class="container" >
    <center><h2>Detail Informasi</h2></center>
    <div class="mt-4 mb-4 row">
        <?php foreach($detailinfo as $detail) : ?>
            <div class="col-md-8">
                <center>
                    <img src="https://berita.mediacorp.sg/image/4660958/1632959164000/large16x9/768/432/ttsh.jpg" class="card-img-top" alt="..." width="150" height="300">
                    <h3 class="mt-3 mb-2"><?php echo $detail->judul ?></h3>
                </center>
                <p style="text-align: justify;"><?php echo $detail->isi ?></p>
            </div>
        <?php endforeach; ?>
        <div class="col-md-4 mt-4" style="border:solid 1px">
            <div class="nsidebar">
                <div class="widget ncategory shadow-sm">
                    <nav class="nav-tree mb-0">
                        <ul>
                            <li>
                                <a class="text-dark" href="#">Informasi</a>                                    
                                <ul>
                                    <?php foreach($infodaman as $info) : ?>
                                        <strong><li><a class="text-dark" href="<?php echo base_url('Info/detail/' . $info->id_info) ?>"><?php echo $info->judul ?><span class="shadow-sm"></span></a></li></strong>
                                    <?php endforeach; ?>

                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>

            </div>
        </div>

    </div>
</div>