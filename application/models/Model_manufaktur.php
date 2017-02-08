<?php

Class Model_manufaktur extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$manufaktur = $this->db
		->select('id_manufaktur, nama, alamat, no_telp, email, bukti, kategori.kategori, barang_dibutuhkan, manufaktur.provinsi, kota.kota')
		->from('manufaktur')
		->join('kategori', 'kategori.kategori = manufaktur.kategori')
		->join('kota', 'kota.kota = manufaktur.kota')
		->get();
		return $manufaktur->result_array();
	}
	
	function tambah_manufaktur($data){
		$this->db->insert('manufaktur', $data);
	}

	function hapus_manufaktur($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_manufaktur($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_manufaktur($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}

?>