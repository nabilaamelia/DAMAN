<?php $role_id = $this->session->userdata('role_id'); ?>
<div class="container-fluid">
  <center><h3>STRUKTUR ORGANISASI DAMAN TELKOM SIDOARJO</h3></center>
  <?php if ($role_id == 1) : ?>
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_data_pengurus"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>
  <?php endif ?>

  <!--search -->
  <div class="row mb-4">
    <div class="col-md-8"></div>
    <div class="col-md-4">
      <form action="<?= base_url('admin/data_pengurus'); ?>" method="post">
        <div class="input-group mb 3">
          <input type="text" class="form-control" placeholder="Search" name="keyword" autocomplete="off">
          <div class="input-group-append">
            <!-- <input class="btn btn-primary" type="submit" name="CARI"> -->
            <button class="btn btn-primary" type="submit" name="">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jabatan</th>
      <th>Alamat</th>
      <!-- <th>Foto</th> -->
      <th>Motto</th>
      <th colspan="3" class="text-center">AKSI</th>
    </tr>

    <?php 
     // $no=1;
    foreach($datapengurus as $pengurus) : ?>

      <tr>
        <tr>
          <td><?php echo ++$start ?></td>
          <td><?php echo $pengurus->nama ?></td>
          <td><?php echo $pengurus->jabatan ?></td>
          <td><?php echo $pengurus->alamat ?></td>
          
          <td><?php echo $pengurus->motto ?></td>
          <td>
            <a href="<?php echo base_url('Admin/Detail_pengurus/'.$pengurus->id_pengurus ) ?>">
              <button class="btn btn-primary btn-sm" style="cursor:pointer;border:none" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info-circle"></i></button>
            </a>
          </td>
          <?php if($role_id == 1) : ?> 

            <td>
              <!-- <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#edit_data_pengurus"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button> -->

              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_data_pengurus<?php echo $pengurus->id_pengurus; ?>"><i class="fa fa-edit"></i></button>

              <!-- Ubah Data -->
              <div class="modal fade" id="edit_data_pengurus<?php echo $pengurus->id_pengurus; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content modal-xl">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">EDIT DATA STRUKTUR ORGANISASI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url().'admin/edit_data_pengurus/'.$pengurus->id_pengurus; ?>" method="post" enctype="multipart/form-data" >

                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $pengurus->nama ?>" required>
                        </div>

                        <div class="form-group">
                          <label>Jabatan</label>
                          <select class="form-control"  name="jabatan" required>
                            <option value="<?php echo $pengurus->jabatan ?>"><?php echo $pengurus->jabatan ?></option>
                            <option value="MANAGER">MANAGER</option>
                            <option value="ASSISTANT MANAGER">ASSISTANT MANAGER</option>
                            <option value="OFFICER">OFFICER</option>
                            <option value="STAFF - HELPDESK">STAFF - HELPDESK</option>
                            <option value="STAFF - TEKNISI">STAFF - TEKNISI</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" name="alamat" id="" cols="30" rows="2" required><?php echo $pengurus->alamat ?></textarea>
                        </div>

                        <div class="form-group">
                          <label>Foto</label><br>
                          <input type="hidden" name="foto_awal" class="form-control" value="<?php echo $pengurus->foto ?>">
                          <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Motto</label>
                          <input type="text" name="motto" class="form-control" value="<?php echo $pengurus->motto ?>">
                        </div>
                        <div class="form-group">
                          <label>No Hp</label>
                          <input type="text" name="no_hp" class="form-control" value="<?php echo $pengurus->no_hp ?>" required>
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

          <?php endif; ?>

        </tr>

      <?php endforeach; ?>
    </table>
    <div class="row">
      <div class="col">
        <?= $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>

  <!-- Modal TAMBAH-->
  <div class="modal fade" id="tambah_data_pengurus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-xl">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'admin/tambah_data_pengurus'; ?>" method="post" enctype="multipart/form-data" >

            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Jabatan</label>
              <select class="form-control" title="Choose Plan" name="jabatan" required>
                  <option selected></option>
                  <option value="MANAGER">MANAGER</option>
                  <option value="ASSISTANT MANAGER">ASSISTANT MANAGER</option>
                  <option value="OFFICER">OFFICER</option>
                  <option value="STAFF - HELPDESK">STAFF - HELPDESK</option>
                  <option value="STAFF - TEKNISI">STAFF - TEKNISI</option>
              </select>
            </div>


            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" id="" cols="30" rows="2" required></textarea>
            </div>

            <div class="form-group">
              <label>Foto</label><br>
              <input type="file" name="foto" class="form-control">
            </div>

            <div class="form-group">
              <label>No Hp</label>
              <input type="text" name="no_hp" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Motto</label>
              <input type="text" name="motto" class="form-control">
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