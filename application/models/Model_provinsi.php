<?php

Class Model_provinsi extends CI_Model {
	function __construct(){
		$this->load->database();
	}
var $table = 'provinsi';
	function select_data(){
		$provinsi = $this->db
		->select('*')
		->from('provinsi')
		->get();
		return $provinsi->result_array();
	}

	function tambah_provinsi($data){
		$this->db->insert('provinsi', $data);
	}

	function hapus_provinsi($provinsi){
	$this->db->where('provinsi', $provinsi);
	$this->db->delete('provinsi');
	}

	function edit_provinsi($where,$table){
	return $this->db->get_where($table,$where);
	}

	function update_provinsi($provinsi, $data){
		$this->db->where('provinsi', $provinsi);
		$this->db->update('provinsi', $data);
	}
	function delete_row($provinsi)
  {
  	$a = str_replace("%20", " ", $provinsi);
 $this->db->query("DELETE FROM `provinsi` WHERE `provinsi` = '".$a."'");
  }
   public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('provinsi',$id);
    $query = $this->db->get();

    return $query->row();
  }
}

?>
