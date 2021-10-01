<?php

class Info extends CI_Controller{

	public function index()
	{
		$data['infodaman'] = $this->Model_data->tampil_info_daman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('Info/info', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$where = array(
			'id_info' => $id 
		);
		$data['infodaman'] = $this->Model_data->tampil_info_daman()->result();
		$data['detailinfo'] = $this->Model_data->detail_info_daman($where)->result();
		// echo print_r($data);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('Info/detail', $data);
		$this->load->view('templates/footer');
	}
} 

?>