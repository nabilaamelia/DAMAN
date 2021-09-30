<?php

class Peserta_pkl extends CI_Controller{

	public function peserta()
	{
		$data['datapkl'] = $this->Model_data->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('peserta_pkl', $data);
		$this->load->view('templates/footer');
	}

	public function Detail($id_peserta)
	{
		$data['datapkl'] = $this->Model_data->detail_data($id_peserta);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('DetailPeserta', $data);
		$this->load->view('templates/footer');
	}

}

?>