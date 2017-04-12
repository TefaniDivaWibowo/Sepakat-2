<?php

Class Model_kategori extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$provinsi = $this->db
		->select('*')
		->from('provinsi')
		->get();
		return $provinsi->result_array();
	}
}

?>