<?php

class Model_login extends CI_Model
{
	public function cek_login()
	{

		$user = $this->input->post('username',true);
		$pass = md5($this->input->post('password',true));

		$cek  = $this->db->get_where('tb_admin', ['username' => $user]);

		if ($cek->num_rows() > 0) {
			$hasil = $cek->row();
			if (password_verify($pass, $hasil->password)) {
				return $hasil;
			} else {

				return array(); 
			}
		} else {

			$this->session->set_flashdata('pesan', '<div style="justify-content:center;" class="text-center alert alert-danger alert-dismissible fade show" role="alert">Email tidak ditemukan!</div>');
			redirect('auth/login');
		}
	}
	public function daftar_user($data, $table)
	{
		$this->db->insert($table, $data);
		return true;
	}
}
