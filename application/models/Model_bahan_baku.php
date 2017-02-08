<?php

Class Model_bahan_baku extends CI_Model {
	function __construct(){
		$this->load->database();
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

	function getPelamar($email)
	{
        $this->db->where('email', $email);
        $this->db->select("*");
        $this->db->from("bahan_baku");
        
        return $this->db->get();
	}

}

?>