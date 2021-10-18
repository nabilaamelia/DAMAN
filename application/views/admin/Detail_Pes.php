<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
        <div class="container ">

        <?php foreach ($datapkl as $pkl ) : ?>

                <div class="row">
                    <div class="col-lg-12 offset-lg-12 text-center">
                        <div class="section-heading">
                            <h2 class="mt-5 mb-5">DETAIL DATA PESERTA PKL TELKOM SIDOARJO</h2>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 mb-5">
                    <div class="row" >
                        <div class="col-lg-4">
                            <img src="<?php echo base_url('assets/images/profile_anak_pkl/'.$pkl->foto) ?>"  alt="..." width="300" height="300">
                        </div>
                        <div class="col-lg-8">
                            <table class="table">
                                    <tr>
                                        <td><strong>Nama</strong></td>
                                        <td><?php echo $pkl->nama ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong>Email</strong></td>
                                        <td><?php echo $pkl->email ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong>No Hp</strong></td>
                                        <td><?php echo $pkl->no_hp ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong>alamat</strong></td>
                                        <td><?php echo $pkl->alamat?></td>
                                    </tr>

                                    <tr>
                                        <td><strong>Asal Instansi</strong></td>
                                        <td><?php echo $pkl->asal_instansi ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong>Tanggal Mulai</strong></td>
                                        <td><?php echo $pkl->tgl_mulai?></td>
                                    </tr>

                                    <tr>
                                        <td><strong>Tanggal Selesai</strong></td>
                                        <td><?php echo $pkl->tgl_selesai?></td>
                                    </tr>


                                    
                            </table>
                        </div>
                    </div>

                    
                    

                </div>

                
                

        <?php endforeach ?>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
