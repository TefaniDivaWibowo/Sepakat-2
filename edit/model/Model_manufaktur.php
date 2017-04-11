<?php

Class Model_manufaktur extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	function get_peru(){
		$query = $this->db->get('manufaktur');
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
        $this->db->where('banyak_kebutuhan >=',$ban);
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }elseif($ban >=1000 AND $ban <3000)
      {
        $this->db->where('banyak_kebutuhan <3000 and banyak_kebutuhan >=1000');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }
      elseif($ban >=500 AND $ban <1000)
      {
        $this->db->where('banyak_kebutuhan <1000 and banyak_kebutuhan >=500');
        $query = $this->db->get('manufaktur');
        return $query->result_array();
      }
      elseif($ban <500)
      {
        $this->db->where('banyak_kebutuhan <500');
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
      ->where('banyak_kebutuhan >=',$ban);
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
}

?>