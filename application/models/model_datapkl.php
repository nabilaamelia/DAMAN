<?php 
 
class Model_datapkl extends CI_Model{

	public function tampil_data(){
		return $this->db->get('tb_data_pkl');
	}
	// public function tampil_data(){
	// 	return $this->db->get('tb_brg');
	// } 
	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}
}