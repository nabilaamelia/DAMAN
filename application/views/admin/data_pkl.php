<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_data_pkl"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>

    <table class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>ASAL SEKOLAH</th>
        <th>NO HP</th>
        <th>EMAIL</th>
        <th>KOTA</th>
        <th>MULAI</th>
        <th>SELESAI</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php 
      $no=1;
      foreach($datapkl as $pkl) : ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pkl->nama_pkl ?></td>
        <td><?php echo $pkl->asal_sekolah ?></td>
        <td><?php echo $pkl->no_hp ?></td>
        <td><?php echo $pkl->email ?></td>
        <td><?php echo $pkl->kota ?></td>
        <td><?php echo $pkl->tgl_mulai ?></td>
        <td><?php echo $pkl->tgl_selesai ?></td>
        
        <td>
          <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_data_pkl"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->
          
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_data_pkl<?php echo $pkl->id_data_pkl; ?>"><i class="fa fa-edit"></i></button>

          <!-- Ubah Data -->
          <div class="modal fade" id="edit_data_pkl<?php echo $pkl->id_data_pkl; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PKL</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url().'admin/edit_data_pkl/'.$pkl->id_data_pkl; ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama_pkl" class="form-control" value="<?php echo $pkl->nama_pkl ?>">
                    </div>

                    <div class="form-group">
                      <label>Asal Sekolah</label>
                      <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $pkl->asal_sekolah ?>">
                    </div>

                    <div class="form-group">
                      <label>No Hp</label>
                      <input type="number" name="no_hp" class="form-control" value="<?php echo $pkl->no_hp ?>">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $pkl->email ?>">
                    </div>

                    <div class="form-group">
                      <label>Kota</label>
                      <input type="text" name="kota" class="form-control" value="<?php echo $pkl->kota ?>">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat" id="" cols="30" rows="10"><?php echo $pkl->alamat ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Tanggal Mulai</label>
                      <input type="date" name="tgl_mulai" class="form-control" value="<?php echo $pkl->tgl_mulai ?>">
                    </div>

                    <div class="form-group">
                      <label>Tanggal Selesai</label>
                      <input type="date" name="tgl_selesai" class="form-control" value="<?php echo $pkl->tgl_selesai ?>">
                    </div>

                    <div class="form-group">
                      <label>foto</label><br>
                      <input type="hidden" name="foto_awal" class="form-control" value="<?php echo $pkl->foto ?>">
                      <input type="file" name="foto" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  
                  <button type="button" class="btn  btn-success" data-dismiss="modal" aria-label="Close">Close</button>
                </div>

                </form>

              </div>
            </div>
          </div>
        <!-- Akhir edit data -->
            
        </td> 
        <td>
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_data_pkl<?php echo $pkl->id_data_pkl; ?>"><i class="fa fa-trash"></i></i></button>
          <!-- <?php echo anchor('admin/data_barang/hapus/' .$pkl->id_data_pkl, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
      </td>
       <!-- Modal Popup untuk delete-->
      <div class="modal fade" id="hapus_data_pkl<?php echo $pkl->id_data_pkl; ?>">
        <div class="modal-dialog">
          <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
              <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
            </div>
                      
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
              <a href="<?php echo base_url().'admin/hapus_data_pkl/'.$pkl->id_data_pkl; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
              <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
        
      </tr>

    <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data_pkl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA PKL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_data_pkl'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_pkl" class="form-control">
          </div>

          <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control">
          </div>

          <div class="form-group">
            <label>No Hp</label>
            <input type="number" name="no_hp" class="form-control">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label>Kota</label>
            <input type="text" name="kota" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="date" name="tgl_mulai" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" name="tgl_selesai" class="form-control">
          </div>

          <div class="form-group">
            <label>foto</label><br>
            <input type="file" name="foto" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn  btn-success" data-dismiss="modal" aria-label="Close">Close</button>
      </div>

      </form>

    </div>
  </div>
</div>