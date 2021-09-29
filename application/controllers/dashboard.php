<?php

class Dashboard extends CI_Controller{

	public function index()
	{
		$data['datapengurus'] = $this->Model_data->tampil_data_pengurus()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

}

?>