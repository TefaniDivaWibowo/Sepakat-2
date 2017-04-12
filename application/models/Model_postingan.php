<?php
Class Model_postingan extends CI_Model {
	function __construct(){
		$this->load->database();
	}
	var $table = 'postingan';
function select_data(){
		$query = $this->db->get('postingan');
        return $query->result_array();
	}
}
?>