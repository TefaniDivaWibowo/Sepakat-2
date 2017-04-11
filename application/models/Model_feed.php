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

	function get_all_feed(){
		$feed = $this->db
				->select('*')
				->from('postingan')
				->get();
		return $feed->result_array();
	}

	function get_user_per($id){
		$feed = $this->db
				->select('*')
				->from('manufaktur')
				->where('id_user', $id)
				->get();
		return $feed->num_rows();
	}

	function get_user_pen($id){
		$feed = $this->db
				->select('*')
				->from('bahan_baku')
				->where('id_user', $id)
				->get();
		return $feed->num_rows();
	}

	function get_user_per_all($id){
		$peru = $this->db
				->select('*')
				->from('manufaktur')
				->where('id_user', $id)
				->get();
		return $peru->result_array();
	}

	function get_user_pen_all($id){
		$feed = $this->db
				->select('*')
				->from('bahan_baku')
				->where('id_user', $id)
				->get();
		return $feed->result_array();
	}
}
?>