<?php

class Admin extends CI_Controller{
	public function index()
	{
		$data['datapkl'] = $this->Model_data->tampil_data()->result();
		$data['datapengurus'] = $this->Model_data->tampil_data_pengurus()->result();
		$data['infodaman'] = $this->Model_data->tampil_info_daman()->result();
		$data['presensi'] = $this->Model_data->tampil_presensi_peserta()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/dashboard", $data);
		$this->load->view("templates_admin/footer");

	}

	public function data_pkl()
	{
		$data['datapkl'] = $this->Model_data->tampil_data()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/data_pkl", $data);
		$this->load->view("templates_admin/footer");

	}

	public function tambah_data_pkl() {
		$nama		= $this->input->post('nama');
		$asal_instansi	= $this->input->post('asal_instansi');
		$no_hp		    = $this->input->post('no_hp');
		$email			= $this->input->post('email');
		$alamat			= $this->input->post('alamat');
		$tgl_mulai		= $this->input->post('tgl_mulai');
		$tgl_selesai	= $this->input->post('tgl_selesai');
		$foto			= $_FILES['foto']['name'];
		$status			= $this->input->post('status');

		if ($foto	='') {}
			else{
				$config ['upload_path'] = './assets/images/profile_anak_pkl';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Foto gagal diupload";
				} else {
					$foto=$this->upload->data('file_name');
				}
			}

			$data = array(
				'nama' 		=> $nama, 
				'asal_instansi' 	=> $asal_instansi,
				'no_hp' 		=> $no_hp, 
				'email' 		=> $email, 
				'alamat' 		=> $alamat,
				'tgl_mulai' 	=> $tgl_mulai,
				'tgl_selesai' 	=> $tgl_selesai,
				'foto' 			=> $foto,
				'status' 		=> $status     
			);
			$this->Model_data->tambah_data($data, 'tb_peserta');
			redirect('admin/data_pkl');
		}

		public function edit_data_pkl($id)
		{
			$nama		= $this->input->post('nama');
			$asal_instansi	= $this->input->post('asal_instansi');
			$no_hp		    = $this->input->post('no_hp');
			$email			= $this->input->post('email');
			$alamat			= $this->input->post('alamat');
			$tgl_mulai		= $this->input->post('tgl_mulai');
			$tgl_selesai	= $this->input->post('tgl_selesai');
			$status			= $this->input->post('status');
			$foto_awal	= $this->input->post('foto_awal');
			$foto			= $_FILES['foto']['name'];
			echo $foto_awal .'<br>';
			echo $foto;
			echo $nama;
			if ($foto == null) {
				$data = array(
					'nama' 		=> $nama, 
					'asal_instansi' 	=> $asal_instansi,
					'no_hp' 		=> $no_hp, 
					'email' 		=> $email,
					'alamat' 		=> $alamat,
					'tgl_mulai' 	=> $tgl_mulai,
					'tgl_selesai' 	=> $tgl_selesai,
					'status' 		=> $status   
				);
			}
			else{
				$config ['upload_path'] = './assets/images/profile_anak_pkl';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Foto gagal diupload";
				} else {
					$foto=$this->upload->data('file_name');
				}
				$data = array(
					'nama' 		=> $nama, 
					'asal_instansi' 	=> $asal_instansi,
					'no_hp' 		=> $no_hp, 
					'email' 		=> $email, 
					'alamat' 		=> $alamat,
					'tgl_mulai' 	=> $tgl_mulai,
					'tgl_selesai' 	=> $tgl_selesai,
					'foto' 			=> $foto,
					'status' 		=> $status    
				);
			}
			$where = array(
				'id_peserta' => $id 
			);
			$this->Model_data->edit_data_pkl($data, $where, 'tb_peserta');
			redirect('admin/data_pkl');
		}
		public function hapus_data_pkl($id) {
			$where = array(
				'id_peserta' => $id 
			);
			$this->Model_data->hapus_data($where, 'tb_peserta');
			redirect(base_url().'admin/data_pkl');
		}


	// tampilan PENGURUS
		public function data_pengurus()
		{
			$data['datapengurus'] = $this->Model_data->tampil_data_pengurus()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
			$this->load->view("templates_admin/header");
			$this->load->view("templates_admin/sidebar");
			$this->load->view("admin/data_pengurus", $data);
			$this->load->view("templates_admin/footer");

		}

		public function tambah_data_pengurus() {
			$nama		= $this->input->post('nama');
			$jabatan	= $this->input->post('jabatan');
			$alamat		= $this->input->post('alamat');
			$keterangan	= $this->input->post('keterangan');
			$foto		= $_FILES['foto']['name'];

			if ($foto	='') {}
				else{
					$config ['upload_path'] = './assets/images/profile_pengurus';
					$config ['allowed_types'] = 'jpg|jpeg|png|gif';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('foto')){
						echo "Foto gagal diupload";
					} else {
						$foto=$this->upload->data('file_name');
					}
				}

				$data = array(
					'nama' 		=> $nama, 
					'jabatan' 	=> $jabatan,
					'alamat' 	=> $alamat,
					'keterangan'=> $keterangan, 
					'foto' 		=> $foto

				);
				$this->Model_data->tambah_data($data, 'tb_pengurus');
				redirect('admin/data_pengurus');
			}

			public function edit_data_pengurus($id)
			{
				$nama		= $this->input->post('nama');
				$jabatan	= $this->input->post('jabatan');
				$alamat		= $this->input->post('alamat');
				$keterangan	= $this->input->post('keterangan');
				$foto_awal	= $this->input->post('foto_awal');
				$foto			= $_FILES['foto']['name'];
				echo $foto_awal .'<br>';
				echo $foto;
				echo $nama;
				if ($foto == null) {
					$data = array(
						'nama' 		=> $nama, 
						'jabatan' 	=> $jabatan,
						'alamat' 	=> $alamat,
						'keterangan'=> $keterangan   
					);
				}
				else{
					$config ['upload_path'] = './assets/images/profile_pengurus';
					$config ['allowed_types'] = 'jpg|jpeg|png|gif';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('foto')){
						echo "Foto gagal diupload";
					} else {
						$foto=$this->upload->data('file_name');
					}
					$data = array(
						'nama' 		=> $nama, 
						'jabatan' 	=> $jabatan,
						'alamat' 	=> $alamat,
						'keterangan'=> $keterangan,
						'foto' 		=> $foto
					);
				}
				$where = array(
					'id_pengurus' => $id 
				);
				$this->Model_data->edit_data_pengurus($data, $where, 'tb_pengurus');
				redirect('admin/data_pengurus');
			}
			public function hapus_data_pengurus($id) {
				$where = array(
					'id_pengurus' => $id 
				);
				$this->Model_data->hapus_data($where, 'tb_pengurus');
				redirect(base_url().'admin/data_pengurus');
			}


	// tampilan INFO DAMAN
			public function info_daman()
			{
				$data['infodaman'] = $this->Model_data->tampil_info_daman()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
				$this->load->view("templates_admin/header");
				$this->load->view("templates_admin/sidebar");
				$this->load->view("admin/info_daman", $data);
				$this->load->view("templates_admin/footer");

			}

			public function tambah_info_daman() {
				$judul		= $this->input->post('judul');
				$isi		= $this->input->post('isi');
				$foto		= $_FILES['foto']['name'];

				if ($foto	='') {}
					else{
						$config ['upload_path'] = './assets/images/profile_info';
						$config ['allowed_types'] = 'jpg|jpeg|png|gif';

						$this->load->library('upload', $config);
						if(!$this->upload->do_upload('foto')){
							echo "Foto gagal diupload";
						} else {
							$foto=$this->upload->data('file_name');
						}
					}

					$data = array(
						'judul' 	=> $judul, 
						'isi' 		=> $isi, 
						'foto' 		=> $foto

					);
					$this->Model_data->tambah_data($data, 'tb_info');
					redirect('admin/info_daman');
				}

				public function edit_info_daman($id)
				{
					$judul		= $this->input->post('judul');
					$isi		= $this->input->post('isi');
					$foto_awal	= $this->input->post('foto_awal');
					$foto		= $_FILES['foto']['name'];
					echo $foto_awal .'<br>';
					echo $foto;
					echo $judul;
					if ($foto == null) {
						$data = array(
							'judul' => $judul, 
							'isi' 	=> $isi
						);
					}
					else{
						$config ['upload_path'] = './assets/images/info_daman';
						$config ['allowed_types'] = 'jpg|jpeg|png|gif';

						$this->load->library('upload', $config);
						if(!$this->upload->do_upload('foto')){
							echo "Foto gagal diupload";
						} else {
							$foto=$this->upload->data('file_name');
						}
						$data = array(
							'judul' 	=> $judul, 
							'isi' 		=> $isi,
							'foto' 		=> $foto
						);
					}
					$where = array(
						'id_info' => $id 
					);
					$this->Model_data->edit_info_daman($data, $where, 'tb_info');
					redirect('admin/info_daman');
				}
				public function hapus_info_daman($id) {
					$where = array(
						'id_info' => $id 
					);
					$this->Model_data->hapus_data($where, 'tb_info');
					redirect(base_url().'admin/info_daman');
				}



	// tampilan PRESENSI PESERTA
				public function presensi_peserta()
				{
					$data['presensipeserta'] = $this->Model_data->tampil_presensi_peserta()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
					$this->load->view("templates_admin/header");
					$this->load->view("templates_admin/sidebar");
					$this->load->view("admin/presensi_peserta", $data);
					$this->load->view("templates_admin/footer");

				}

				public function tambah_presensi_peserta() {
					$judul		= $this->input->post('judul');
					$keterangan	= $this->input->post('keterangan');

					$data = array(
						'judul' 		=> $judul, 
						'keterangan' 	=> $keterangan

					);
					$this->Model_data->tambah_data($data, 'tb_presensi');
					redirect('admin/presensi_peserta');
				}

				public function edit_presensi_peserta($id)
				{
					$judul		= $this->input->post('judul');
					$keterangan	= $this->input->post('keterangan');
					echo $judul;
					$data = array(
						'judul' 		=> $judul, 
						'keterangan' 	=> $keterangan
					);
					$where = array(
						'id_presensi' => $id 
					);
					$this->Model_data->edit_presensi_peserta($data, $where, 'tb_presensi');
					redirect('admin/presensi_peserta');
				}
				public function hapus_presensi_peserta($id) {
					$where = array(
						'id_presensi' => $id 
					);
					$this->Model_data->hapus_data($where, 'tb_presensi');
					redirect(base_url().'admin/presensi_peserta');
				}

	// tampilan DISKUSI PESERTA
				public function forum_diskusi()
				{
					$data['forumdiskusi'] = $this->Model_data->tampil_forum_diskusi()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
					$this->load->view("templates_admin/header");
					$this->load->view("templates_admin/sidebar");
					$this->load->view("admin/forum_diskusi", $data);
					$this->load->view("templates_admin/footer");

				}

				public function tambah_forum_diskusi() {
					$time		= $this->input->post('time');
					$nama		= $this->input->post('nama');
					$pesan		= $this->input->post('pesan');

					$data = array(
						'time' 		=> $time, 
						'nama' 		=> $nama,
						'pesan' 	=> $pesan

					);
					$this->Model_data->tambah_data($data, 'tb_diskusi');
					redirect('admin/forum_diskusi');
				}

				public function edit_forum_diskusi($id)
				{
					$time		= $this->input->post('time');
					$nama		= $this->input->post('nama');
					$pesan		= $this->input->post('pesan');
					echo $time;
					$data = array(
						'time' 		=> $time, 
						'nama' 		=> $nama,
						'pesan' 	=> $pesan
					);
					$where = array(
						'id_diskusi' => $id 
					);
					$this->Model_data->edit_forum_diskusi($data, $where, 'tb_diskusi');
					redirect('admin/forum_diskusi');
				}
				public function hapus_forum_diskusi($id) {
					$where = array(
						'id_diskusi' => $id 
					);
					$this->Model_data->hapus_data($where, 'tb_diskusi');
					redirect(base_url().'admin/forum_diskusi');
				}

			}
		?>