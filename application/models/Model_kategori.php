<?php

Class Model_kategori extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$kategori= $this->db
		->select('*')
		->from('kategori')
		->get();
		return $kategori->result_array();
	}

	function select_id($kategori){
		$kategori= $this->db
		->select('*')
		->from('kategori')
		->where('kategori', $kategori)
		->get();
		return $kategori->result_array();
	}
}

?>