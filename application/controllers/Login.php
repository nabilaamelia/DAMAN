<?php

class Login extends CI_Controller{
	// function __construct()
	// {
	// 	parent::__construct();   
	// 	$this->load->model('Model_data');
	// }

	public function index(){
		// echo $this->session->set_userdata($is_login);
		$this->load->view('login');


	}

	public function login_aksi() {
		$user = $this->input->post('username',true);
		$pass = md5($this->input->post('password',true));

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		echo $pass;

		if($this->form_validation->run() != FALSE){
			$where = array(
				'username' => $user,
				'password' => $pass
			);

			$cekLogin = $this->Model_data->cek_login($where)->num_rows();

			if($cekLogin > 0){
				$sess_data = array(
					'username' => $user,
					'login' => 'OK'
				);

				$this->session->set_userdata('is_login', TRUE);
				$this->session->set_userdata('user', $user);

				redirect(base_url('Admin'));

			}
			else{
				$this->session->set_flashdata('failed','User & Password Salah');
				redirect(base_url('Login'));
			}

		}
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
