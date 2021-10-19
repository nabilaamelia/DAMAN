<?php

class Info extends CI_Controller{

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] 	= (base_url().'info/index');
		$config['total_rows']	= $this->db->count_all_results('tb_info');
		$config['num_links']	= 1;
		$config['per_page']		= 3;

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
		$data['infodaman'] = $this->Model_data->tampil_info_daman3($config["per_page"], $data['start'])->result();
		
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