<?php
  Class Kerjasama extends CI_Controller{

    public function ker_set($id){
        $data = array(
			'konfirmasi' 	=> 1
		);
		$where = array(
			'id_bahan_baku'	=> $id_ban,
			'konfirmasi'	=> 0
		);

		$this->load->model('model_bahan_baku');
		$this->model_bahan_baku->update_ker_ban($where, $data, 'kerjasama');

        $this->Model_kerjasama->terima($id, $data);

		redirect('index.php/penyedia/profile');
    }

    public function terima_bahanbaku($id){
        $data = array('konfirmasi' 	=> 1);

		$this->load->model('Model_kerjasama');
        $this->Model_kerjasama->terima_bahanbaku($_SESSION['id_manufaktur'], $id, $data);

        $notif_update = array ('notif_man' => $this->session->userdata('notif_man') - 1);
        $this->session->set_userdata($notif_update);

		redirect('perusahaan/profile');
    }

    public function tolak_bahanbaku($id){
        $this->load->model('Model_kerjasama');
        $this->Model_kerjasama->tolak_bahanbaku($_SESSION['id_manufaktur'], $id);

        $notif_update = array ('notif_man' => $this->session->userdata('notif_man') - 1);
        $this->session->set_userdata($notif_update);

		redirect('perusahaan/profile');
    }

    public function terima_manufaktur($id){
        $data = array('konfirmasi' 	=> 1);

		$this->load->model('Model_kerjasama');
        $this->Model_kerjasama->terima_manufaktur($_SESSION['id_bahan_baku'], $id, $data);

        $notif_update = array ('notif_ban' => $this->session->userdata('notif_ban') - 1);
        $this->session->set_userdata($notif_update);

		redirect('penyedia/profile');
    }

    public function tolak_manufaktur($id){
        $this->load->model('Model_kerjasama');
        $this->Model_kerjasama->tolak_manufaktur($_SESSION['id_bahan_baku'], $id);

        $notif_update = array ('notif_ban' => $this->session->userdata('notif_ban') - 1);
        $this->session->set_userdata($notif_update);

		redirect('penyedia/profile');
    }
  }

?>
