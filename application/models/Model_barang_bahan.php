<?php

Class Model_barang_bahan extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$barang_bahan = $this->db
		->select('id_bb, nama_bb, barang_bahan.id_kategori, kategori.kategori')
		->from('barang_bahan')
		->join('kategori', 'barang_bahan.id_kategori = kategori.id_kategori')
		->get();
		return $barang_bahan->result_array();
	}
	
	function selectSearch($table, $where){
		$search = $this->db->select('*')
				 ->from($table)
				 ->where($where)
				 ->get();
		return $search->row_array();
	}

	function tambah_barang_bahan($data){
		$this->db->insert('barang_bahan', $data);
	}

	function hapus_barang_bahan($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_barang_bahan($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_barang_bahan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>