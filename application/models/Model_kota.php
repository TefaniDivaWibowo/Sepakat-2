<?php

Class Model_kota extends CI_Model {
	function __construct(){
		$this->load->database();
	}
var $table = 'kota';
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
function update_kota($where,$data){
    $this->db->where($where);
    $this->db->update('kota',$data);
  }
  public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id_kota',$id);
    $query = $this->db->get();

    return $query->row();
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

	function update_kotas($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_row($id)
  {
  $this->db->where('id_kota', $id);
  $this->db->delete('kota'); 
  }
}

?>