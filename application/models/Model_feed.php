<?php

Class Model_feed extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function get_feed_row($id){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->where('id_user', $id)
				->get();
		$feed->num_rows();
	}

	function get_feed_detail($id){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->where('id_user', $id)
				->get();
		return $feed->result_array();
	}
}
?>