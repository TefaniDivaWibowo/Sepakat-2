<?php
Class Kategori extends CI_Model{
  var $table = 'kategori';

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_categories()
  {
  $this->db->from('kategori');
  $query=$this->db->get();
  return $query->result();
  }

  public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id_kategori',$id);
    $query = $this->db->get();

    return $query->row();
  }

  public function book_add($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  public function book_update($where, $data)
  {
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
  }

  public function delete_by_id($id)
  {
    $this->db->where('id_kategori', $id);
    $this->db->delete($this->table);
  }

  //Kategori
  function selectSearch($table, $where){
    $search = $this->db->select('*')
         ->from($table)
         ->where($where)
         ->get();
    return $search->row_array();
  }

  function tambah_kategori($data){
    $this->db->insert('kategori', $data);
  }

  function update_kategori($where,$data){
    $this->db->where($where);
    $this->db->update('kategori',$data);
  }
}
?>
