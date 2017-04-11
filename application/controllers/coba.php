<?php
  Class Coba extends CI_Controller{

    public function rum(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('rumah-user-manufaktur');
      $this->load->view('footer');
    }

    public function pid(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('penyedia-isidetail');
      $this->load->view('footer');
    }
  }

?>
