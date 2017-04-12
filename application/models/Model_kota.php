<?php

Class Model_kota extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$kota = $this->db
		->select('id_kota, provinsi, kota')
		->from('kota')
		->get();
		return $kota->result_array();
	}

	function selectSearch($table, $where){
		$search = $this->db->select('*')
				 ->from($table)
				 ->where($where)
				 ->get();
		return $search->row_array();
	}

	function tambah_kota($data){
		$this->db->insert('kota', $data);
	}

	function hapus_kota($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_kota($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_kota($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>