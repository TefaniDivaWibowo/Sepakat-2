<?php

Class Model_user extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function select_data(){
		$user = $this->db
		->select('*')
		->from('user')
		->get();
		return $user->result_array();
	}

	function hapus_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

?>