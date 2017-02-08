<?php
  Class Perusahaan extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('perusahaan-list');
      $this->load->view('footer');
    }

    function masukperu(){
      
    }

    public function detail(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('perusahaan-detail');
      $this->load->view('footer');
    }
    public function isidetail(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('perusahaan-isidetail');
      $this->load->view('footer');
    }
  }
?>
