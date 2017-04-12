<?php
  Class Hub extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('hub');
      $this->load->view('footer');
    }

    public function coba(){
    	$this->load->model('Model_user');
    	$id_bahan_baku = $this->Model_user->get_id_bahan_baku($this->session->userdata('id_user'));
    			  echo "<pre>";
			         print_r($id_bahan_baku);
			      echo "</pre>";

		echo "<p>";

		$this->load->model('Model_bahan_baku');
		$notif = $this->Model_bahan_baku->get_notif($id_bahan_baku['id_bahan_baku']);
				  echo "<pre>";
			         print_r($notif);
			      echo "</pre>";

		echo "<p>";
				  echo "<pre>";
			         print_r($this->session->userdata);
			      echo "</pre>";
    }

    public function coba2(){
    	$this->load->model('Model_user');
    	$this->load->model('Model_bahan_baku');
    	$id_manufaktur 	= $this->Model_user->get_id_manufaktur($this->session->userdata('id_user'));
		$notif_man 		= $this->Model_bahan_baku->get_notif_man($id_manufaktur[0]['id_manufaktur']);

				  echo "<pre>";
			         print_r($id_manufaktur);
			         print_r($notif_man);
			         print_r($this->session->userdata());
			      echo "</pre>";
    }

    public function coba3($kategori){
      $this->load->model('model_kategori');

      $id['id'] = $this->model_kategori->select_id($kategori);

      echo '<pre>';
      print_r($id);
      echo '</pre>';

      foreach ($id as $id_kat) {
        $id_fin = $id_kat[0]['id_kategori'];
      }
      			  echo "<pre>";
			         print_r($id_fin);
			      echo "</pre>";
    }
  }
?>
