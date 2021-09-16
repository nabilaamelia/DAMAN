    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!---jss---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <div class='animatebox animate fadeInRightBig panel'>
        <div style='width: 100px; float: left; margin-right: 10px; margin-top: 10px'>
            <img title='' src='http://pegawai.pnm.ac.id/assets/file/pegawai/foto/20170908104836.JPG' style='border-radius: 5px;'/>
        </div>
        <div class="container">
        <h1 class="text-center">Daftar Peserta PKL</h1>
            <table table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Asal Sekolah</td>
                    <td>No HP</td>
                    <td>Email</td>
                    <td>Kota</td>
                    <td>Tanggal Mulai</td>
                    <td>Tanggal Selesai</td>
                </tr>

                <?php
                $no=1;
                foreach ($datapkl as $pkl) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pkl->nama_pkl ?></td>
                    <td><?php echo $pkl->asal_sekolah ?></td>
                    <td><?php echo $pkl->no_hp ?></td>
                    <td><?php echo $pkl->email ?></td>
                    <td><?php echo $pkl->kota ?></td>
                    <td><?php echo $pkl->tgl_mulai ?></td>
                    <td><?php echo $pkl->tgl_selesai ?></td>
                </tr>


                <?php endforeach; ?>

            </table>
        </div>
    </div>
