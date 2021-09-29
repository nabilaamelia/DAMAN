<?php

class Info extends CI_Controller{

	public function index()
	{
		$data['infodaman'] = $this->Model_data->tampil_info_daman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('info', $data);
		$this->load->view('templates/footer');
	}
} 

?>