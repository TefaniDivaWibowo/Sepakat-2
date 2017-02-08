<?php
  Class Home extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('rumah');
      $this->load->view('footer');
    }

    public function bahan_baku(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('rumah-manufaktur-user');
      $this->load->view('footer');
    }

    public function manufaktur(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('rumah-bahan-baku-user');
      $this->load->view('footer');
    }
  }
?>
