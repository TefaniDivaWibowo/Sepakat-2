<?php

Class Model_user extends CI_Model {
	function __construct(){
		$this->load->database();
	}
var $table = 'user';
	function select_data(){
		$user = $this->db
		->select('*')
		->from('user')
		->get();
		return $user->result_array();
	}

  public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id_user',$id);
    $query = $this->db->get();

    return $query->row();
  }

	function hapus_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_id_bahan_baku($id){
		$query = $this->db
		->select('*')
		->from('user')
		->join('bahan_baku','bahan_baku.id_user = user.id_user')
		->join('kerjasama', 'kerjasama.id_bahan_baku = bahan_baku.id_bahan_baku')
		->where('user.id_user',$id)
		->where('pengirim', 'Manufaktur')
		->get();
		return $query->row_array();
	}

	function get_id_manufaktur($id){
		$query = $this->db
		->select('*')
		->from('user')
		->join('manufaktur','manufaktur.id_user = user.id_user')
		->join('kerjasama', 'kerjasama.id_manufaktur = manufaktur.id_manufaktur')
		->where('user.id_user',$id)
		->where('pengirim', 'Bahan Baku')
		->get();
		return $query->result_array();
	}
	function selectSearch($table, $where){
    $search = $this->db->select('*')
         ->from($table)
         ->where($where)
         ->get();
    return $search->row_array();
  }
  function update_user($where,$data){
    $this->db->where($where);
    $this->db->update('user',$data);
  }
  function delete_row($id)
  {
  $this->db->where('id_user', $id);
  $this->db->delete('user'); 
  }
   function tambahuser($data1){
	
	$this->db->insert('user', $data1);
	
	}
}

?>