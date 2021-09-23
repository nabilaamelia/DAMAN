<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_data_pengurus"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>

    <table class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>Foto</th>
        <th>Keterangan</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php 
      $no=1;
      foreach($datapengurus as $pengurus) : ?>

      <tr>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pengurus->nama ?></td>
        <td><?php echo $pengurus->jabatan ?></td>
        <td><?php echo $pengurus->alamat ?></td>
        <td><?php echo $pengurus->foto ?></td>
        <td><?php echo $pengurus->keterangan ?></td>
        
        <td>
          <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_data_pengurus"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->
          
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_data_pengurus<?php echo $pengurus->id_pengurus; ?>"><i class="fa fa-edit"></i></button>

          <!-- Ubah Data -->
          <div class="modal fade" id="edit_data_pengurus<?php echo $pengurus->id_pengurus; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PENGURUS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url().'admin/edit_data_pengurus/'.$pengurus->id_pengurus; ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" value="<?php echo $pengurus->nama ?>">
                    </div>

                    <div class="form-group">
                      <label>Jabatan</label>
                      <input type="text" name="jabatan" class="form-control" value="<?php echo $pengurus->jabatan ?>">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat" id="" cols="30" rows="10"><?php echo $pengurus->alamat ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Foto</label><br>
                      <input type="hidden" name="foto_awal" class="form-control" value="<?php echo $pengurus->foto ?>">
                      <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="kota" class="form-control" value="<?php echo $pengurus->keterangan ?>">
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
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_data_pengurus<?php echo $pengurus->id_pengurus; ?>"><i class="fa fa-trash"></i></i></button>
          <!-- <?php echo anchor('admin/data_barang/hapus/' .$pengurus->id_pengurus, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
      </td>
       <!-- Modal Popup untuk delete-->
      <div class="modal fade" id="hapus_data_pengurus<?php echo $pengurus->id_pengurus; ?>">
        <div class="modal-dialog">
          <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
              <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
            </div>
                      
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
              <a href="<?php echo base_url().'admin/hapus_data_pengurus/'.$pengurus->id_pengurus; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
              <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
        
      </tr>

    <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data_pengurus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DATA PENGURUS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_data_pengurus'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>

          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group">
            <label>Foto</label><br>
            <input type="file" name="foto" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
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