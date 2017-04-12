<?php

Class Model_bahan_baku extends CI_Model {
	function __construct(){
		$this->load->database();
	}
<<<<<<< HEAD
var $table = 'bahan_baku';
=======

>>>>>>> 7b463fa908b706bdb358b338cc8235315edf394a
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

  function get_name_ker_man($id){
    $query = $this->db
      ->select('*')
      ->from('manufaktur')
      ->where('id_manufaktur',$id)
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
<<<<<<< HEAD
    $query = $this->db->get('bahan_baku');
    return $query->result_array();
=======
		$query = $this->db
             ->select('*')
             ->from('bahan_baku')
             ->where('kategori', $id)
             ->get();
		return $query->result_array();
>>>>>>> 7b463fa908b706bdb358b338cc8235315edf394a
	}
public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id_bahan_baku',$id);
    $query = $this->db->get();

    return $query->row();
  }
	function select_data(){
		$query= $this->db->query('SELECT * FROM  `bahan_baku` 
    WHERE nama IS NOT NULL and alamat IS NOT NULL and no_telp IS NOT NULL and email IS NOT NULL and total_produksi IS NOT NULL and kategori IS NOT NULL and barang_bahan IS NOT NULL and provinsi IS NOT NULL and kota IS NOT NULL');
    return $query->result_array();
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
function update_bahan($where,$data){
    $this->db->where($where);
    $this->db->update('bahan_baku',$data);
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
<<<<<<< HEAD
  public function update_gamlat($id_user, $data){
      $this->db->where('id_user', $id_user)
            ->set($data)
            ->update('bahan_baku');
    }
    function tambahbahan($data1){
  
  $this->db->insert('bahan_baku', $data1);
  
  }
  function delete_row($id)
  {
  $this->db->where('id_bahan_baku', $id);
  $this->db->delete('bahan_baku'); 
  }
=======

  public function update_ker_ban($where, $data, $table){
      $this->db->where($where)
               ->set($data)
               ->update($table);
    }
>>>>>>> 7b463fa908b706bdb358b338cc8235315edf394a
}

?>