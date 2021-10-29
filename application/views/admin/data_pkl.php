<?php $role_id = $this->session->userdata('role_id'); ?>
<div class="container-fluid">
  <center><h3>DATA PESERTA PKL TELKOM SIDOARJO</h3></center>
  
  <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_data_pkl"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>
  
  
  <!--search -->
  <div class="row mb-4">
    <div class="col-md-8"></div>
    <div class="col-md-4">
      <form action="<?= base_url('admin/data_pkl'); ?>" method="post">
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
      <th>NO</th>
      <th>NAMA</th>
      <th>INSTANSI</th><!-- 
      <th>NO HP</th>
      <th>EMAIL</th> -->
      <th>WAKTU</th>
      <th>STATUS</th>
      <!-- <th>ALAMAT</th> -->
      <!-- <th>MULAI</th>
        <th>SELESAI</th> -->
        <!-- <th>FOTO</th> -->
        <!-- <th>STATUS</th> -->
        <th colspan="3" class="text-center">AKSI</th>
      </tr>

      <?php 
      // $no=1;
      foreach($datapkl as $pkl) : 
        date_default_timezone_set('Asia/Jakarta');
        $akhir  = date_create();
        $awal   = date_create($pkl->tgl_selesai);
        $diff  = date_diff($awal, $akhir); ?>

        <tr>
          <td><?php echo ++$start ?></td>
          <td><?php echo $pkl->nama ?></td>
          <td><?php echo $pkl->asal_instansi ?></td>
          <td><?php echo $diff->days; ?> Hari</td>
          <!-- <td><?php echo $pkl->no_hp ?></td>
            <td><?php echo $pkl->email ?></td> -->
            <td><?php echo $pkl->status ?></td>

            <td>
              <a href="<?php echo base_url('Peserta_pkl/Detail_Admin/'.$pkl->id_peserta ) ?>">
                <button class="btn btn-primary btn-sm" style="cursor:pointer;border:none" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info-circle"></i></button>
              </a>
            </td>        
            <td>
              <button class="btn btn-primary btn-sm" data-toggle="modal"title="Edit Data" data-target="#edit_data_pkl<?php echo $pkl->id_peserta; ?>"><i class="fa fa-edit"></i></button>

              <!-- Ubah Data -->
              <div class="modal fade" id="edit_data_pkl<?php echo $pkl->id_peserta; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content modal-xl">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PKL</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url().'admin/edit_data_pkl/'.$pkl->id_peserta; ?>" method="post" enctype="multipart/form-data" >

                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $pkl->nama ?>" required>
                        </div>

                        <div class="form-group">
                          <label>Asal Instansi</label>
                          <input type="text" name="asal_instansi" class="form-control" value="<?php echo $pkl->asal_instansi ?>" required>
                        </div>

                        <div class="form-group">
                          <label>No Hp</label>
                          <input type="number" name="no_hp" class="form-control" value="<?php echo $pkl->no_hp ?>" required>
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $pkl->email ?>">
                        </div>

                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" name="alamat" id="" cols="30" rows="2" required><?php echo $pkl->alamat ?></textarea>
                        </div>

                        <div class="form-group">
                          <label>Tanggal Mulai</label>
                          <input type="date" name="tgl_mulai" class="form-control" value="<?php echo $pkl->tgl_mulai ?>" required>
                        </div>

                        <div class="form-group">
                          <label>Tanggal Selesai</label>
                          <input type="date" name="tgl_selesai" class="form-control" value="<?php echo $pkl->tgl_selesai ?>" required>
                        </div>

                        <div class="form-group">
                          <label>foto</label><br>
                          <input type="hidden" name="foto_awal" class="form-control" value="<?php echo $pkl->foto ?>">
                          <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control"  name="status" required>
                            <option value="<?php echo  $pkl->status ?>"><?php echo $pkl->status ?></option>
                            <option value="AKTIF">AKTIF</option>
                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
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
              <!-- Akhir edit data -->

            </td> 
            <td>
              <button class="btn btn-danger btn-sm" data-toggle="modal" title="Hapus Data" data-target="#hapus_data_pkl<?php echo $pkl->id_peserta; ?>"><i class="fa fa-trash"></i></i></button>
              <!-- <?php echo anchor('admin/data_barang/hapus/' .$pkl->id_peserta, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
            </td>
            <!-- Modal Popup untuk delete-->
            <div class="modal fade" id="hapus_data_pkl<?php echo $pkl->id_peserta; ?>">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                    <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
                  </div>

                  <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="<?php echo base_url().'admin/hapus_data_pkl/'.$pkl->id_peserta; ?>" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
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
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>

    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambah_data_pkl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content modal-xl">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA PKL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url().'admin/tambah_data_pkl'; ?>" method="post" enctype="multipart/form-data" >

              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Asal Instansi</label>
                <input type="text" name="asal_instansi" class="form-control" required>
              </div>

              <div class="form-group">
                <label>No Hp</label>
                <input type="number" name="no_hp" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" id="" cols="30" rows="3" required></textarea>
              </div>

              <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Foto</label><br>
                <input type="file" name="foto" class="form-control">
              </div>

              <div class="form-group">
                <label>Status</label>
                <select class="form-control"  name="status" required>
                  <option value="AKTIF">AKTIF</option>
                  <option value="TIDAK AKTIF">TIDAK AKTIF</option>
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