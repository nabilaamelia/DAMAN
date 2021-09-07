<?php

class Admin extends CI_Controller{
	public function index()
	{
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/dashboard");
		$this->load->view("templates_admin/footer");

	}

    public function data_pkl()
	{
		$data['datapkl'] = $this->model_datapkl->tampil_data()->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/data_pkl", $data);
		$this->load->view("templates_admin/footer");

	}
    public function tambah_data_pkl() {
        $nama_pkl		= $this->input->post('nama_pkl');
		$asal_sekolah	= $this->input->post('asal_sekolah');
		$no_hp		    = $this->input->post('no_hp');
		$email			= $this->input->post('email');
		$kota			= $this->input->post('kota');
        $alamat			= $this->input->post('alamat');
        $tgl_mulai		= $this->input->post('tgl_mulai');
        $tgl_selesai	= $this->input->post('tgl_selesai');
		$foto			= $_FILES['foto']['name'];
    
        if ($foto	='') {}
        else{
			$config ['upload_path'] = './assets/images/profile_anak_pkl';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Gambar gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
		}

        $data = array(
			'nama_pkl' 		=> $nama_pkl, 
			'asal_sekolah' 	=> $asal_sekolah,
			'no_hp' 		=> $no_hp, 
			'email' 		=> $email,
			'kota' 			=> $kota, 
			'alamat' 		=> $alamat,
            'tgl_mulai' 	=> $tgl_mulai,
            'tgl_selesai' 	=> $tgl_selesai,
            'foto' 			=> $foto            
		);
        $this->model_datapkl->tambah_data($data, 'tb_data_pkl');
		redirect('admin/data_pkl');
    }

} 
?>