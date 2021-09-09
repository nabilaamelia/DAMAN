<?php

class Peserta_pkl extends CI_Controller{

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('peserta_pkl');
		$this->load->view('templates/footer');
	}
}

?>