<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_presensi_peserta"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>

    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Keterangan</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php 
      $no=1;
      foreach($presensipeserta as $presensi) : ?>

      <tr>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $presensi->judul ?></td>
        <td><?php echo $presensi->keterangan ?></td>
        
        <td>
          <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_presensi_peserta"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->
          
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_presensi_peserta<?php echo $presensi->id_presensi; ?>"><i class="fa fa-edit"></i></button>

          <!-- Ubah Data -->
          <div class="modal fade" id="edit_presensi_peserta<?php echo $presensi->id_presensi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EDIT PRESENSI PESERTA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url().'admin/edit_presensi_peserta/'.$presensi->id_presensi; ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" value="<?php echo $presensi->judul ?>">
                    </div>

                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea class="form-control" name="keterangan" cols="30" rows="10"><?php echo $presensi->keterangan ?></textarea>
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
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_presensi_peserta<?php echo $presensi->id_presensi; ?>"><i class="fa fa-trash"></i></i></button>
          <!-- <?php echo anchor('admin/data_barang/hapus/' .$presensi->id_presensi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
      </td>
       <!-- Modal Popup untuk delete-->
      <div class="modal fade" id="hapus_presensi_peserta<?php echo $presensi->id_presensi; ?>">
        <div class="modal-dialog">
          <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
              <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
            </div>
                      
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
              <a href="<?php echo base_url().'admin/hapus_presensi_peserta/'.$presensi->id_presensi; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
              <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
        
      </tr>

    <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_presensi_peserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM PRESENSI PESERTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_presensi_peserta'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"></textarea>
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