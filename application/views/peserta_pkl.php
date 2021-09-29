<div class="p-3 mb-2 bg-dark text-white" style="height: 70px;"></div>
    <div class='container '>

        <div class="container  ">
        <h1 class="text-center">Daftar Peserta PKL</h1>
            <table table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Asal Instansi</td>
                    <td>No HP</td>
                    <td>Email</td>
                    <td>Alamat</td>
                    <td>Tanggal Mulai</td>
                    <td>Tanggal Selesai</td>
                    <td>Foto</td>
                    <td>Status</td>
                </tr>

                <?php
                $no=1;
                foreach ($datapkl as $pkl) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pkl->nama ?></td>
                    <td><?php echo $pkl->asal_instansi ?></td>
                    <td><?php echo $pkl->no_hp ?></td>
                    <td><?php echo $pkl->email ?></td>
                    <td><?php echo $pkl->alamat ?></td>
                    <td><?php echo $pkl->tgl_mulai ?></td>
                    <td><?php echo $pkl->tgl_selesai ?></td>
                    <td><?php echo $pkl->foto ?></td>
                    <td><?php echo $pkl->status ?></td>
                </tr>


                <?php endforeach; ?>

            </table>
        </div>
    </div>
