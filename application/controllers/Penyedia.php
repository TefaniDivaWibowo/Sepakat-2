<?php
Class Penyedia extends CI_Controller{
  public function index(){
      $this->load->view('admin-header');
      $this->load->view('admin-bahan-baku');
      $this->load->view('admin-footer');
    }
  }

?>
