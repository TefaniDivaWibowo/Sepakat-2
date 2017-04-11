<?php

Class Model_manufaktur extends CI_Model {

  function __construct(){
    $this->load->database();
  }
  
  function get_peru_all($id){
      $query = $this->db->select('*')
                        ->from('manufaktur')
                        ->where('id_manufaktur', $id)
                        ->get();
      return $query->result_array();
  }
  
  function get_peru(){
    $query = $this->db->query("SELECT * FROM `manufaktur` WHERE `kota` IS NOT NULL");
    return $query->result_array();
  }
  
  function get_peru_home(){
    $query = $this->db->query("SELECT * FROM `manufaktur` WHERE `kota` IS NOT NULL LIMIT 5");
    return $query->result_array();
  }
  
  function get_peru_single($id){
    $query = $this->db
      ->select('*')
      ->from('user')
      ->join('manufaktur','user.id_user = manufaktur.id_user')
      ->where('user.id_user',$id)
      ->get();
      
    return $query->result_array();
  }

  function select_data(){
    $manufaktur = $this->db
    ->select('id_manufaktur, nama, alamat, no_telp, email, bukti, kategori.kategori, barang_dibutuhkan, manufaktur.provinsi, kota.kota')
    ->from('manufaktur')
    ->join('kategori', 'kategori.kategori = manufaktur.kategori')
    ->join('kota', 'kota.kota = manufaktur.kota')
    ->get();
    return $manufaktur->result_array();
  }
  
  function tambah_manufaktur($data){
    $this->db->insert('manufaktur', $data);
  }

  function hapus_manufaktur($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
  }

  function edit_manufaktur($where,$table){    
  return $this->db->get_where($table,$where);
  }

  function update_manufaktur($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function carri($ban)
    {
       if($ban >=3000)
      {
        $this->db->where('jumlah >=',$ban);
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }elseif($ban >=1000 AND $ban <3000)
      {
        $this->db->where('jumlah <3000 and jumlah >=1000');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }
      elseif($ban >=500 AND $ban <1000)
      {
        $this->db->where('jumlah <1000 and jumlah >=500');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }
      elseif($ban <500)
      {
        $this->db->where('jumlah <500');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }
    }
   public function carr($keyword)
    {
       $this->db->where('tipe', $keyword);
        $query = $this->db->get('manufaktur');
        return $query->result_array();
    }
    public function gab(){
      $this->db
      ->where('tipe', $keyword)
      ->where('jumlah >=',$ban);
        $query = $this->db->get('manufaktur');
        return $query->result_array();
    }
    public function carl($rad)
    {
      if($rad == "terbaru")
      {
        $this->db->order_by('jam','asc');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }else{
        $this->db->order_by('jam','desc');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }
      
    }

    public function update_profil($id, $data)
    {
    $this->db->where('id_user', $id)
            ->set($data)
            ->update('manufaktur');
    }

     function ambil_spesifik($iduser)
        {
           $query = $this->db->get_where('manufaktur',array('id_user' => $iduser));
            return $query->row();
        }

    public function select($username){
      $manufaktur = $this->db
      ->select('id_user')
      ->from('user')
      ->where('username', $username)
      ->get();

      return $manufaktur->row_array();
    }

    public function update_gamlat($id_user, $data){
      $this->db->where('id_user', $id_user)
            ->set($data)
            ->update('manufaktur');
    }

    function selectSearch($table, $where){
      $search = $this->db->select('*')
           ->from($table)
           ->where($where)
           ->get();
      return $search->row_array();
    }
}

?>