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

			$cekLogin = $this->Model_data->cek_login($where);

			if($cekLogin->num_rows() > 0){
				$hasil = $cekLogin->row();
				print_r($hasil);

				$this->session->set_userdata('is_login', TRUE);
				$this->session->set_userdata('user', $user);
				$this->session->set_userdata('role_id', $hasil->role_id);

				redirect(base_url('Admin'));

			}
			else{
				$this->session->set_flashdata('failed','User & Password Salah');
				redirect(base_url('Login'));
			}

		}
	}
	public function login_user()
	{
		$user = $this->input->post('username',true);
		$pass = md5($this->input->post('password',true));
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() !== FALSE) {
			
			$auth = $this->Model_login->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('failed','User & Password Salah');
				// redirect(base_url('Login'));
			} else {
				$this->session->set_userdata('user', $auth->usernamer);
				$this->session->set_userdata('id_user', $auth->id_user);
				$this->session->set_userdata('role_id', $auth->role_id);
				redirect(base_url('Admin'));
			}
		}
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
