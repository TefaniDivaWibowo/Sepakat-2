<?php
  Class Kategori extends CI_Controller{

    public function index(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('kategori');
      $this->load->view('footer');
    }
  }

?>
