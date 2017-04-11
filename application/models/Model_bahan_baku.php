<?php

Class Model_bahan_baku extends CI_Model {
	function __construct(){
		$this->load->database();
	}

<<<<<<< HEAD
	function get_id_ban($id_user){
		$query = $this->db
             ->select('*')
             ->from('bahan_baku')
             ->where('id_user', $id_user)
             ->get();
		return $query->result_array();
	}
	
	function get_databahan($id){
    $query = $this->db
             ->select('id_bahan_baku, nama, alamat, no_telp, email, bukti, total_produksi, kategori.kategori, barang_bahan, provinsi, kota, bahan_baku.icon, gambar_latar, deskripsi, id_user')
             ->from('bahan_baku')
						 ->join('kategori', 'kategori.id_kategori = bahan_baku.kategori')
             ->where('id_bahan_baku', $id)
             ->get();
    return $query->result_array();
  }
	
  function get_pen_single($id){
    $query = $this->db
      ->select('id_bahan_baku, nama, alamat, no_telp, email, bukti, total_produksi, kategori.kategori, barang_bahan, provinsi, kota, bahan_baku.icon, gambar_latar, deskripsi, id_user, tipe')
      ->from('bahan_baku')
      ->join('kategori','kategori.id_kategori = bahan_baku.kategori')
      ->where('bahan_baku.id_user',$id)
      ->get();
      
    return $query->result_array();
  }

  function get_notif($id){
    $query = $this->db
      ->select('*')
      ->from('kerjasama')
      ->where('id_bahan_baku', $id)
      ->where('konfirmasi', 0)
      ->get();
    return $query->num_rows();
  }

	function get_idm($id_user){
    $query = $this->db
             ->select('*')
             ->from('manufaktur')
             ->where('id_user', $id_user)
             ->get();
    return $query->result_array();
  }
	
	function get_bahan($id){
		$query = $this->db
             ->select('*')
             ->from('bahan_baku')
             ->where('kategori', $id)
             ->get();
=======
	function get_bahan(){
		$query = $this->db->get('bahan_baku');
>>>>>>> 1ec2a7517f7e212f3dc95bf547a7e160088be3e7
		return $query->result_array();
	}

	function select_data(){
		$bahan_baku = $this->db
		->select('id_bahan_baku, nama, alamat, no_telp, email, bukti, total_produksi, kategori.kategori, barang_bahan, bahan_baku.provinsi, kota.kota, id_user')
		->from('bahan_baku')
		->join('kategori', 'kategori.kategori = bahan_baku.kategori')
		->join('kota', 'kota.kota = bahan_baku.kota')
		->get();
		return $bahan_baku->result_array();
	}
	
	function tambah_bahan_baku($data){
		$this->db->insert('bahan_baku', $data);
	}

	function hapus_bahan_baku($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_bahan_baku($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_bahan_baku($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

  function update_useru($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function update_ban($setdata, $where){
    $query = $this->db->query("UPDATE `tampil` SET `sell_kursi_studio`= '$setdata' WHERE `id_tampil`='$where'");
    return $query;
  }

	function getPelamar($email)
	{
        $this->db->where('email', $email);
        $this->db->select("*");
        $this->db->from("bahan_baku");
        
        return $this->db->get();
	}

	public function carri($ban)
    {
       if($ban >=3000)
      {
        $this->db->where('total_produksi >=',$ban);
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
      }elseif($ban >=1000 AND $ban <3000)
      {
        $this->db->where('total_produksi <3000 and total_produksi >=1000');
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
      }
      elseif($ban >=500 AND $ban <1000)
      {
        $this->db->where('total_produksi <1000 and total_produksi >=500');
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
      }
      elseif($ban <500)
      {
        $this->db->where('total_produksi <500');
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
      }
    }
   public function carr($keyword)
    {
       $this->db->where('tipe', $keyword);
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
    }
    public function gab(){
      $this->db
      ->where('tipe', $keyword)
      ->where('total_produksi >=',$ban);
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
    }
	  public function carl($rad)
    {
      if($rad == "terbaru")
      {
        $this->db->order_by('jam','asc');
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
      }else{
        $this->db->order_by('jam','desc');
        $query = $this->db->get('bahan_baku');
        return $query->result_array();
      }
      
    }

<<<<<<< HEAD
    public function update_profil($id, $data){
      $this->db->where('id_user', $id)
              ->set($data)
              ->update('bahan_baku');
    }

  public function select_data_kat(){
    $kategori = $this->db
    ->select('*')
    ->from('kategori')
    ->get();
    return $kategori->result_array();
  }
	
	public function select_data_kat_home(){
    $kategori = $this->db->query('SELECT * FROM `kategori` LIMIT 6');
    return $kategori->result_array();
  }
=======

>>>>>>> 1ec2a7517f7e212f3dc95bf547a7e160088be3e7
}

?>