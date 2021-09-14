<?php

class Peserta_pkl extends CI_Controller{

	public function index()
	{
		$data['datapkl'] = $this->Model_datapkl->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('peserta_pkl', $data);
		$this->load->view('templates/footer');
	}

}

?>