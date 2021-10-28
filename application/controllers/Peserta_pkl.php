<?php

class Peserta_pkl extends CI_Controller{

	public function cek_data_pkl(){
		$this->session->unset_userdata('keyword');
		redirect(base_url('Peserta_pkl/index'));
	}
	public function index(){
		$data['keyword'] = $this->input->post('keyword');
		if($data['keyword'] != ""){
			$this->session->set_userdata('keyword', $data['keyword']);
		}
		
		$key = $this->session->userdata('keyword');
		
		// if($data['keyword'] == "") {
		$this->load->library('pagination');
		if($key == null){
			$config['total_rows']	= $this->db->count_all_results('tb_peserta');
		} else {
			$config['total_rows']	= $this->Model_data->jumlah_pkl($key);
		}
			// echo $key;

		$this->load->library('pagination');

		$config['base_url'] 	= (base_url().'peserta_pkl/index');
		$config['total_rows']	= $this->db->count_all_results('tb_peserta');
		$config['num_links']	= 1;
		$config['per_page']		= 10;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		// //initialize
		$this->pagination->initialize($config);

		$data['start'] 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['datapkl'] = $this->Model_data->tampil_data($config["per_page"], $data['start'], $key)->result();
		

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