<?php

class Peserta_pkl extends CI_Controller{

	public function index()
	{
		$data['datapkl'] = $this->Model_data->tampil_data1()->result();
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

	public function Detail_Admin($id_peserta)
	{
		$data['datapkl'] = $this->Model_data->detail_data($id_peserta);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/Detail_Pes', $data);
		$this->load->view('templates_admin/footer');
	}
	public function presensi()
	{
		$data['presensi'] = $this->Model_data->tampil_presensi_peserta()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('presensi', $data);
		$this->load->view('templates/footer');
	}

}

?>