<?php 

class Model_data extends CI_Model{

	public function tampil_data($limit, $start){
		return $this->db->get('tb_peserta', $limit, $start);
	}
	public function tampil_data1(){
		return $this->db->get('tb_peserta');
	}
	// public function tampil_data(){
	// return $this->db->get('tb_brg');
	// } 
	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_pkl($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_data($id_peserta)
	{
		$result = $this->db->where('id_peserta', $id_peserta)->get('tb_peserta');
		if($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}

	}


	// CRUD pengurus

	public function tampil_data_pengurus(){
		return $this->db->get('tb_pengurus');
	}

	public function tampil_data_pengurus2($limit, $start){
		return $this->db->get('tb_pengurus', $limit, $start);
	}
	
	public function tambah_data_pengurus($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_pengurus($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}
	public function hapus_data_pengurus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	




	// CRUD INFO DAMAN
	public function tampil_info_daman(){
		return $this->db->get('tb_info');
	}
	public function tampil_info_daman2($limit, $start){
		return $this->db->get('tb_info', $limit, $start);
	}

	public function tambah_info_daman($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_info_daman($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}
	public function hapus_info_daman($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_info_daman($where)
	{
		return $this->db->get_where('tb_info', $where);

	}


	// CRUD PRESENSI PESERTA
	public function tampil_presensi_peserta(){
		return $this->db->get('tb_presensi');
	}

	public function tampil_presensi_peserta2($limit, $start){
		return $this->db->get('tb_presensi', $limit, $start);
	}

	public function tambah_presensi_peserta($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_presensi_peserta($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}
	public function hapus_presensi_peserta($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// CRUD DISKUSI PESERTA
	public function tampil_forum_diskusi(){
		return $this->db->get('tb_diskusi');
	}

	public function tampil_forum_diskusi2($limit, $start){
		return $this->db->get('tb_diskusi', $limit, $start);
	}

	public function tambah_forum_diskusi($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_forum_diskusi($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}
	public function hapus_forum_diskusi($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	// CRUD DATA ADMIN
	public function tampil_data_admin(){
		return $this->db->get('tb_admin');
	}

	public function tampil_data_admin2($limit, $start){
		return $this->db->get('tb_admin', $limit, $start);
	}

	public function tambah_data_admin($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_admin($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}
	public function hapus_data_admin($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
 
}