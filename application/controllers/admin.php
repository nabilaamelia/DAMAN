<?php

class Admin extends CI_Controller{
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('user') == NULL) {
			$this->session->set_flashdata('failed','Anda Belum login, silahkan login terlebih dahulu !');
			redirect(base_url('login'));
		}
		
	}
	public function index()
	{

		$data['datapkl'] = $this->Model_data->tampil_data1()->result();
		$data['datapengurus'] = $this->Model_data->tampil_data_pengurus1()->result();
		$data['infodaman'] = $this->Model_data->tampil_info_daman()->result();
		$data['presensi'] = $this->Model_data->tampil_presensi_peserta()->result();
		$this->session->unset_userdata('keyword');
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/dashboard", $data);
		$this->load->view("templates_admin/footer");

	}

	public function cek_data_pkl(){
		$this->session->unset_userdata('keyword');
		redirect(base_url('Admin/data_pkl'));
	}
	public function data_pkl(){
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

			//config
		$config['base_url'] 	= (base_url().'admin/data_pkl');
		$config['num_links']	= 1;
		$config['per_page']		= 4;
		$data['keyword'] = $this->session->userdata('keyword');

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


		//initialize
		$this->pagination->initialize($config);

		$data['start'] 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['datapkl'] = $this->Model_data->tampil_data($config["per_page"], $data['start'], $key)->result();


		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/data_pkl", $data);
		$this->load->view("templates_admin/footer");
	}


	public function tambah_data_pkl() {
		$nama		= $this->input->post('nama');
		$asal_instansi	= $this->input->post('asal_instansi');
		$no_hp		    = $this->input->post('no_hp');
		$email			= $this->input->post('email');
		$alamat			= $this->input->post('alamat');
		$tgl_mulai		= $this->input->post('tgl_mulai');
		$tgl_selesai	= $this->input->post('tgl_selesai');
		$foto			= $_FILES['foto']['name'];
		$status			= $this->input->post('status');

		if ($foto	='') {

		}
		else{
			$config ['upload_path'] = './assets/images/profile_anak_pkl';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Foto gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama' 		=> $nama, 
			'asal_instansi' 	=> $asal_instansi,
			'no_hp' 		=> $no_hp, 
			'email' 		=> $email, 
			'alamat' 		=> $alamat,
			'tgl_mulai' 	=> $tgl_mulai,
			'tgl_selesai' 	=> $tgl_selesai,
			'foto' 			=> $foto,
			'status' 		=> $status     
		);
		$this->Model_data->tambah_data($data, 'tb_peserta');
		redirect('admin/cek_data_pkl');
	}

	public function edit_data_pkl($id)
	{
		$nama		= $this->input->post('nama');
		$asal_instansi	= $this->input->post('asal_instansi');
		$no_hp		    = $this->input->post('no_hp');
		$email			= $this->input->post('email');
		$alamat			= $this->input->post('alamat');
		$tgl_mulai		= $this->input->post('tgl_mulai');
		$tgl_selesai	= $this->input->post('tgl_selesai');
		$status			= $this->input->post('status');
		$foto_awal	= $this->input->post('foto_awal');
		$foto			= $_FILES['foto']['name'];
		echo $foto_awal .'<br>';
		echo $foto;
		echo $nama;
		if ($foto == null) {
			$data = array(
				'nama' 		=> $nama, 
				'asal_instansi' 	=> $asal_instansi,
				'no_hp' 		=> $no_hp, 
				'email' 		=> $email,
				'alamat' 		=> $alamat,
				'tgl_mulai' 	=> $tgl_mulai,
				'tgl_selesai' 	=> $tgl_selesai,
				'status' 		=> $status   
			);
		}
		else{
			$config ['upload_path'] = './assets/images/profile_anak_pkl';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Foto gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
			$data = array(
				'nama' 		=> $nama, 
				'asal_instansi' 	=> $asal_instansi,
				'no_hp' 		=> $no_hp, 
				'email' 		=> $email, 
				'alamat' 		=> $alamat,
				'tgl_mulai' 	=> $tgl_mulai,
				'tgl_selesai' 	=> $tgl_selesai,
				'foto' 			=> $foto,
				'status' 		=> $status    
			);
		}
		$where = array(
			'id_peserta' => $id 
		);
		$this->Model_data->edit_data_pkl($data, $where, 'tb_peserta');
		redirect('admin/data_pkl');
	}
	public function hapus_data_pkl($id) {
		$where = array(
			'id_peserta' => $id 
		);
		$this->Model_data->hapus_data($where, 'tb_peserta');
		redirect(base_url().'admin/cek_data_pkl');
	}


	// tampilan PENGURUS
	public function cek_data_pengurus(){
		$this->session->unset_userdata('keyword');
		redirect(base_url('admin/data_pengurus'));
	}
	public function Detail_pengurus($id){
		$data['pengurus'] = $this->Model_data->detail_pengurus($id)->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/detail_pengurus", $data);
		$this->load->view("templates_admin/footer");
	}
	public function data_pengurus()
	{
		$data['keyword'] = $this->input->post('keyword');
		// echo $data['keyword'];
		if($data['keyword'] != ""){
			$this->session->set_userdata('keyword', $data['keyword']);
		}
		
		$key = $this->session->userdata('keyword');
		
		
		$this->load->library('pagination');
		if($key == null){
			$config['total_rows']	= $this->db->count_all_results('tb_pengurus');
		} else {
			$config['total_rows']	= $this->Model_data->jumlah_data_pengurus($key);
		}

		
		$config['base_url'] 	= (base_url().'admin/data_pengurus');
		$config['num_links']	= 1;
		$config['per_page']		= 4;
		$data['keyword'] = $this->session->userdata('keyword');

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

		
		$this->pagination->initialize($config);

		$data['start'] 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['datapengurus'] = $this->Model_data->tampil_data_pengurus($config["per_page"], $data['start'], $key)->result();
		

		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/data_pengurus", $data);
		$this->load->view("templates_admin/footer");
		
	}

	public function tambah_data_pengurus() {
		$nama		= $this->input->post('nama');
		$jabatan	= $this->input->post('jabatan');
		$alamat		= $this->input->post('alamat');
		$motto	= $this->input->post('motto');
		$foto		= $_FILES['foto']['name'];

		if ($foto	='') {

		}
		else{
			$config ['upload_path'] = './assets/images/profile_pengurus';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Foto gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama' 		=> $nama, 
			'jabatan' 	=> $jabatan,
			'alamat' 	=> $alamat,
			'motto'=> $motto, 
			'foto' 		=> $foto

		);
		$this->Model_data->tambah_data($data, 'tb_pengurus');
		redirect('admin/data_pengurus');
	}

	public function edit_data_pengurus($id)
	{
		$nama		= $this->input->post('nama');
		$jabatan	= $this->input->post('jabatan');
		$alamat		= $this->input->post('alamat');
		$motto		= $this->input->post('motto');
		$no_hp		= $this->input->post('no_hp');
		$foto_awal	= $this->input->post('foto_awal');
		$foto		= $_FILES['foto']['name'];

		echo $foto_awal .'<br>';
		echo $foto;
		echo $nama;
		if ($foto == null) {
			$data = array(
				'nama' 		=> $nama, 
				'jabatan' 	=> $jabatan,
				'no_hp' 	=> $no_hp,
				'alamat' 	=> $alamat,
				'motto'		=> $motto   
			);
		}
		else{
			$config ['upload_path'] = './assets/images/profile_pengurus';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Foto gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
			$data = array(
				'nama' 		=> $nama, 
				'jabatan' 	=> $jabatan,
				'no_hp' 	=> $no_hp,
				'alamat' 	=> $alamat,
				'motto'		=> $motto,
				'foto' 		=> $foto
			);
		}
		$where = array(
			'id_pengurus' => $id 
		);
		$this->Model_data->edit_data_pengurus($data, $where, 'tb_pengurus');
		redirect('admin/data_pengurus');
	}
	public function hapus_data_pengurus($id) {
		$where = array(
			'id_pengurus' => $id 
		);
		$this->Model_data->hapus_data($where, 'tb_pengurus');
		redirect(base_url().'admin/data_pengurus');
	}


	// tampilan INFO DAMAN
	public function cek_info_daman(){
		$this->session->unset_userdata('keyword');
		redirect(base_url('Admin/info_daman'));
	}
	public function info_daman(){
		$data['keyword'] = $this->input->post('keyword');
		if($data['keyword'] != ""){
			$this->session->set_userdata('keyword', $data['keyword']);
		}
		
		$key = $this->session->userdata('keyword');
		
		// if($data['keyword'] == "") {
		$this->load->library('pagination');
		if($key == null){
			$config['total_rows']	= $this->db->count_all_results('tb_info');
		} else {
			$config['total_rows']	= $this->Model_data->jumlah_info($key);
		}
			// echo $key;

			//config
		$config['base_url'] 	= (base_url().'admin/info_daman');
		$config['num_links']	= 1;
		$config['per_page']		= 2;
		$data['keyword'] = $this->session->userdata('keyword');

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
		$data['infodaman'] = $this->Model_data->tampil_info_daman2($config["per_page"], $data['start'], $key)->result();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/info_daman", $data);
		$this->load->view("templates_admin/footer");

	}

	public function tambah_info_daman() {
		$judul		= $this->input->post('judul');
		$isi		= $this->input->post('isi');
		$foto		= $_FILES['foto']['name'];

		if ($foto	='') {

		}
		else{
			$config ['upload_path'] = './assets/images/profile_info';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Foto gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'judul' 	=> $judul, 
			'isi' 		=> $isi, 
			'foto' 		=> $foto

		);
		$this->Model_data->tambah_data($data, 'tb_info');
		redirect('admin/info_daman');
	}

	public function edit_info_daman($id)
	{
		$judul		= $this->input->post('judul');
		$isi		= $this->input->post('isi');
		$foto_awal	= $this->input->post('foto_awal');
		$foto		= $_FILES['foto']['name'];
		echo $foto_awal .'<br>';
		echo $foto;
		echo $judul;
		if ($foto == null) {
			$data = array(
				'judul' => $judul, 
				'isi' 	=> $isi
			);
		}
		else{
			$config ['upload_path'] = './assets/images/info_daman';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Foto gagal diupload";
			} else {
				$foto=$this->upload->data('file_name');
			}
			$data = array(
				'judul' 	=> $judul, 
				'isi' 		=> $isi,
				'foto' 		=> $foto
			);
		}
		$where = array(
			'id_info' => $id 
		);
		$this->Model_data->edit_info_daman($data, $where, 'tb_info');
		redirect('admin/info_daman');
	}
	public function hapus_info_daman($id) {
		$where = array(
			'id_info' => $id 
		);
		$this->Model_data->hapus_data($where, 'tb_info');
		redirect(base_url().'admin/info_daman');
	}



	// tampilan PRESENSI PESERTA
	public function presensi_peserta()
	{

		$config['base_url'] 	= (base_url().'Admin/presensi_peserta');
		$config['total_rows']	= $this->db->count_all('tb_presensi');
		$config['per_page']		= 5;
		$config['uri_segment']	= 3;
		$choice					= $config["total_rows"] / $config['per_page'];
		$config["num_links"]	= floor($choice);

		$config['first_link']	= 'First';
		$config['last_link']	= 'Last';
		$config['next_link']	= 'Next';
		$config['prev_link']	= 'Prev';
		$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']	= '</ul></nav></div>';
		$config['num_tag_open']		= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']	= '</span></li>';
		$config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	= '</span></li>';
		$config['next_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close']	= '<span aria-hidden="true">&raquo</span></span></li>';
		$config['prev_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close']	= '</span>Next</li>';
		$config['first_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['first_tagl_close']	= '</span></li>';
		$config['last_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['last_tagl_close']	= '</span></li>';


		$this->pagination->initialize($config);
		$data['page'] 		= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['presensipeserta'] = $this->Model_data->tampil_presensi_peserta2($config["per_page"], $data['page'])->result();
		$data ['pagination'] = $this->pagination->create_links();
		// echo print_r($data);
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/presensi_peserta", $data);
		$this->load->view("templates_admin/footer");

	}

	public function tambah_presensi_peserta() {
		$judul		= $this->input->post('judul');
		$absen		= $this->input->post('absen');
		$tampil		= $this->input->post('tampil');

		$data = array(
			'judul' 		=> $judul, 
			'absen' 		=> $absen,
			'tampil' 		=> $tampil

		);
		$this->Model_data->tambah_data($data, 'tb_presensi');
		redirect('admin/presensi_peserta');
	}

	// public function edit_presensi_peserta($id)
	// {
	// 	$judul		= $this->input->post('judul');
	// 	$keterangan	= $this->input->post('keterangan');
	// 	echo $judul;
	// 	$data = array(
	// 		'judul' 		=> $judul, 
	// 		'keterangan' 	=> $keterangan
	// 	);
	// 	$where = array(
	// 		'id_presensi' => $id 
	// 	);
	// 	$this->Model_data->edit_presensi_peserta($data, $where, 'tb_presensi');
	// 	redirect('admin/presensi_peserta');
	// }
	public function hapus_presensi_peserta($id) {
		$where = array(
			'id_presensi' => $id 
		);
		$this->Model_data->hapus_data($where, 'tb_presensi');
		redirect(base_url().'admin/presensi_peserta');
	}


	// tampilan DATA ADMIN
	public function data_admin()
	{	

		$config['base_url'] 	= (base_url().'Admin/data_admin');
		$config['total_rows']	= $this->db->count_all('tb_admin');
		$config['per_page']		= 5;
		$config['uri_segment']	= 3;
		$choice					= $config["total_rows"] / $config['per_page'];
		$config["num_links"]	= floor($choice);

		$config['first_link']	= 'First';
		$config['last_link']	= 'Last';
		$config['next_link']	= 'Next';
		$config['prev_link']	= 'Prev';
		$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']	= '</ul></nav></div>';
		$config['num_tag_open']		= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']	= '</span></li>';
		$config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	= '</span></li>';
		$config['next_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close']	= '<span aria-hidden="true">&raquo</span></span></li>';
		$config['prev_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close']	= '</span>Next</li>';
		$config['first_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['first_tagl_close']	= '</span></li>';
		$config['last_tag_open']	= '<li class="page-item "><span class="page-link">';
		$config['last_tagl_close']	= '</span></li>';


		$this->pagination->initialize($config);
		$data['page'] 		= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data['dataadmin'] = $this->Model_data->tampil_data_admin2($config["per_page"], $data['page'])->result();
		$data ['pagination'] = $this->pagination->create_links();
		
		// $data['barang'] = $this->model_barang->tampil_data_pengurus()->result();
		$this->load->view("templates_admin/header");
		$this->load->view("templates_admin/sidebar");
		$this->load->view("admin/data_admin", $data);
		$this->load->view("templates_admin/footer");

	}

	public function tambah_data_admin() {
		$username	= $this->input->post('username');
		$password	= md5($this->input->post('password'));
		$akses	= $this->input->post('akses');
		$where  = array(
			'username' 	=> $username,
		);
		$cekuser = $this->db->get_where('tb_admin', $where);
		echo $cekuser->num_rows();
		if($cekuser->num_rows() > 0) {
			$this->session->set_flashdata('faileduser','User sudah ada');
			redirect('admin/data_admin');
		} else {

			$data = array(
				'username' 	=> $username, 
				'password' 	=> $password,
				'role_id' 	=> $akses

			);
			$this->Model_data->tambah_data($data, 'tb_admin');
			redirect('admin/data_admin');
		}
	}

	public function edit_data_admin($id)
	{
		$password	= md5($this->input->post('password',true));

		$data = array( 
			'password' 	=> $password
		);
		$where = array(
			'id_admin' => $id 
		);
		$this->Model_data->edit_data_admin($data, $where, 'tb_admin');
		redirect('admin/data_admin');
	}
	public function hapus_data_admin($id) {
		$where = array(
			'id_admin' => $id 
		);
		$this->Model_data->hapus_data($where, 'tb_admin');
		redirect(base_url().'admin/data_admin');
	}



	//LOGINNNNN

}
?>
