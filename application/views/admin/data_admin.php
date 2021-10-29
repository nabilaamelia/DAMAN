<?php $role_id = $this->session->userdata('role_id'); ?>
<?php $user = $this->session->userdata('user'); ?>
<div class="container-fluid">
  <center><h3>DATA ADMIN TELKOM SIDOARJO</h3></center>
  <?php if(!empty($this->session->flashdata('faileduser'))){?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <?= $this->session->flashdata('faileduser');?>
    </div>
  <?php }?>
  <?php if ($role_id == 1) : ?>
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_data_admin"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>
  <?php endif; ?>

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="3" class="text-center">AKSI</th>
    </tr>

    <?php 
      // $no=1;
    foreach($dataadmin as $admin) : ?>
      <?php if($role_id == 1):  ?>

        <tr>
          <td><?php echo ++$page ?></td>
          <td><?php echo $admin->username ?></td>
          <td><?php echo $admin->password ?></td>

          <td>
            <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_data_admin"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->

            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_data_admin<?php echo $admin->id_admin; ?>"><i class="fa fa-edit"></i></button>

            <!-- Ubah Data -->
          </td> 
          <td>
            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_data_admin<?php echo $admin->id_admin; ?>"><i class="fa fa-trash"></i></i></button>
            <!-- <?php echo anchor('admin/data_barang/hapus/' .$admin->id_admin, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
          </td>   
        </tr>
      <?php else: ?>
        <?php if($admin->username == $this->session->userdata('user')): ?>
          <tr>
            <td><?php echo ++$page ?></td>
            <td><?php echo $admin->username ?></td>
            <td><?php echo $admin->password ?></td>

            <td>
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_data_admin<?php echo $admin->id_admin; ?>"><i class="fa fa-edit"></i></button>

              <!-- Ubah Data -->
            </td>
          </tr>
        <?php endif; ?>
      <?php endif; ?>

    <?php endforeach; ?>
  </table>
  <div class="row">
    <div class="col">
      <?php echo $pagination; ?>
    </div>
  </div>
</div>
<?php foreach($dataadmin as $admin) : ?>
  <!-- Modal Tambah -->
  <div class="modal fade" id="tambah_data_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-xl">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA ADMIN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'admin/tambah_data_admin'; ?>" method="post" enctype="multipart/form-data" >

            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Akses</label>
              <select class="form-control" title="Choose Plan" name="akses" required>
                <option value="0">User</option>
                <option value="1">Admin</option>
              </select>
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

  <!-- MODAL EDIT -->

  <div class="modal fade" id="edit_data_admin<?php echo $admin->id_admin; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDIT DATA ADMIN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'admin/edit_data_admin/'.$admin->id_admin; ?>" method="post" enctype="multipart/form-data" >

            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control" value="Password Baru" required>
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

  <!-- Modal Popup untuk delete-->
  <div class="modal fade" id="hapus_data_admin<?php echo $admin->id_admin; ?>">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top:100px;">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
          <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
        </div>

        <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
          <a href="<?php echo base_url().'admin/hapus_data_admin/'.$admin->id_admin; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
          <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>