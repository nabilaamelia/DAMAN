<div class="container-fluid">
<center><h3>INFO DATA MANAGEMENT TELKOM SIDOARJO</h3></center>
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_info_daman"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>
 
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Foto</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php 
      $no=1;
      foreach($infodaman as $info) : ?>

      <tr>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $info->judul ?></td>
        <td><?php echo $info->isi ?></td>
        <td><?php echo $info->foto ?></td>
        
        <td>
          <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_info_daman"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->
          
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_info_daman<?php echo $info->id_info; ?>"><i class="fa fa-edit"></i></button>

          <!-- Ubah Data -->
          <div class="modal fade" id="edit_info_daman<?php echo $info->id_info; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EDIT INFO DAMAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url().'admin/edit_info_daman/'.$info->id_info; ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" value="<?php echo $info->judul ?>">
                    </div>

                    <div class="form-group">
                      <label>Isi</label>
                      <textarea class="form-control" name="isi" cols="30" rows="10"><?php echo $info->isi ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Foto</label><br>
                      <input type="hidden" name="foto_awal" class="form-control" value="<?php echo $info->foto ?>">
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
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_info_daman<?php echo $info->id_info; ?>"><i class="fa fa-trash"></i></i></button>
          <!-- <?php echo anchor('admin/data_barang/hapus/' .$info->id_info, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
      </td>
       <!-- Modal Popup untuk delete-->
      <div class="modal fade" id="hapus_info_daman<?php echo $info->id_info; ?>">
        <div class="modal-dialog">
          <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
              <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
            </div>
                      
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
              <a href="<?php echo base_url().'admin/hapus_info_daman/'.$info->id_info; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
              <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
        
      </tr>

    <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_info_daman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INFO DAMAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_info_daman'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>

          <div class="form-group">
            <label>Isi</label>
            <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group">
            <label>Foto</label><br>
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