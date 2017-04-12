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
  }
?>
