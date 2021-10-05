<div class="container-fluid">
<center><h3>FORUM DISKUSI TELKOM SIDOARJO</h3></center>
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_forum_diskusi"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>
 
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Time</th>
        <th>Nama</th>
        <th>Pesan</th>
        <th colspan="3">AKSI</th>
      </tr>

      <?php 
      $no=1;
      foreach($forumdiskusi as $diskusi) : ?>

      <tr>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $diskusi->time ?></td>
        <td><?php echo $diskusi->nama ?></td>
        <td><?php echo $diskusi->pesan ?></td>
        
        <td>
          <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_forum_diskusi"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->
          
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_forum_diskusi<?php echo $diskusi->id_diskusi; ?>"><i class="fa fa-edit"></i></button>

          <!-- Ubah Data -->
          <div class="modal fade" id="edit_forum_diskusi<?php echo $diskusi->id_diskusi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EDIT DISKUSI PESERTA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url().'admin/edit_forum_diskusi/'.$diskusi->id_diskusi; ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group">
                      <label>Time</label>
                      <input type="text" name="time" class="form-control" value="<?php echo $diskusi->time ?>">
                    </div>

                    <div class="form-group">
                      <label>Nama</label>
                      <textarea class="form-control" name="nama" cols="30" rows="10"><?php echo $diskusi->nama ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Pesan</label>
                      <textarea class="form-control" name="pesan" cols="30" rows="10"><?php echo $diskusi->pesan ?></textarea>
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
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_forum_diskusi<?php echo $diskusi->id_diskusi; ?>"><i class="fa fa-trash"></i></i></button>
          <!-- <?php echo anchor('admin/data_barang/hapus/' .$diskusi->id_diskusi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
      </td>
       <!-- Modal Popup untuk delete-->
      <div class="modal fade" id="hapus_forum_diskusi<?php echo $diskusi->id_diskusi; ?>">
        <div class="modal-dialog">
          <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
              <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
            </div>
                      
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
              <a href="<?php echo base_url().'admin/hapus_forum_diskusi/'.$diskusi->id_diskusi; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
              <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
        
      </tr>

    <?php endforeach; ?>
    </table>
      <div class="row">
        <div class="col">
          <?php echo $pagination; ?>
        </div>
      </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_forum_diskusi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM DISKUSI PESERTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_forum_diskusi'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Time</label>
            <input type="text" name="time" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama</label>
            <textarea class="form-control" name="nama" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group">
            <label>Pesan</label>
            <textarea class="form-control" name="pesan" id="" cols="30" rows="10"></textarea>
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