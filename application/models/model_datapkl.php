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
}