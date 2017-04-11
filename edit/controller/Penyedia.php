<?php
Class Penyedia extends CI_Controller{
  public function profile(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('penyedia-profile');
      $this->load->view('footer');
  }

  public function isidetail(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('penyedia-isidetail');
      $this->load->view('footer');
  }

  		public function up_dat(){
			$id_user 	= $this->input->post('id_user');
			$id_bb 		= $this->input->post('id_bab');

			$data = array(
				'nama' 				=> $this->input->post('nama'),
				'alamat' 			=> $this->input->post('alamat'),
				'no_telp' 			=> $this->input->post('no'),
				'email' 			=> $this->input->post('email'),
				'kategori' 			=> $this->input->post('kategori'),
				'barang_bahan' 		=> $this->input->post('barang'),
				'provinsi' 			=> $this->input->post('provinsi'),
				'kota'	 			=> $this->input->post('kota')
			);

			$where = array(
				'id_bahan_baku' => $this->input->post('id_bab')
			);

			$this->model_bahan_baku->update_bahan_baku($where,$data,'bahan_baku');

			$data2 = array(
				'username' 		=> $this->input->post('email')
			);

			$where2 = array(
				'id_user' => $this->input->post('id_user')
			);

			$this->model_bahan_baku->update_user($where2,$data2,'user');

			redirect('penyedia/profile/');
  		}

		public function up_met(){

			$data = array(
				'nama' 				=> $this->input->post('nama'),
				'alamat' 			=> $this->input->post('alamat'),
				'no_telp' 			=> $this->input->post('no'),
				'email' 			=> $this->input->post('email')
			);

			$where = array(
				'id_bahan_baku' => $this->input->post('id_bab')
			);

			$this->model_barang_bahan->update_barang_bahan($where,$data,'bahan_baku');

			$where2 = array(
				'id_user' => $this->input->post('id_user')
			);

			redirect('data_barang_bahan/');
  		}

  		public function desk(){
  			if (null == $this->input->post('submit')) {
				$this->load->view('penyedia/isidetail/');
			}
			else{
				$data = array(
						'id_user' 				=> $this->input->post('nama'),
						'alamat' 			=> $this->input->post('alamat'),
				);
				$this->model_manufaktur->tambah_manufaktur($data);
				$data['message'] = 'Data Inserted Successfully';
				redirect('list_manufaktur');
  			}
  		}

  	public function getComboBahan($id_kategori) {
  		$this->load->database();
  		$dataComboBahan =  $this->db->select('nama_bb')
  				 ->from('barang_bahan')
  				 ->join('kategori', 'kategori.id_kategori = barang_bahan.id_kategori', 'inner')
  				 ->where(array("barang_bahan.id_kategori" => $id_kategori))
  				 ->get()
  				 ->result_array();
  		foreach($dataComboBahan as $optionComboBahan){
  			echo "<option value='".$optionComboBahan['nama_bb']."'>".$optionComboBahan['nama_bb']."</option>";
  		}
  	}

  	public function getComboKota($provinsi) {
  		$this->load->database();
  		$dataComboKota =  $this->db->select('kota')
  				 ->from('kota')
  				 ->where(array("kota.provinsi" => $provinsi))
  				 ->get()
  				 ->result_array();
  		foreach($dataComboKota as $optionComboKota){
  			echo "<option value='".$optionComboKota['kota']."'>".$optionComboKota['kota']."</option>";
  		}
  	}
}

?>
