    <div class='animatebox animate fadeInRightBig panel'>
        <div style='width: 100px; float: left; margin-right: 10px; margin-top: 10px'>
            <img title='' src='http://pegawai.pnm.ac.id/assets/file/pegawai/foto/20170908104836.JPG' style='border-radius: 5px;'/>
        </div>
        <div>
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>Nama</td>
                    <td>ASAL SEKOLAH</td>
                    <td>NO HP</td>
                    <td>EMAIL</td>
                    <td>KOTA</td>
                    <td>MULAI</td>
                    <td>SELESAI</td>
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