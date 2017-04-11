<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  Class Home extends CI_Controller{
    public function index(){
      $this->load->helper('url');
      $this->load->database();
      
      $this->load->model('Model_manufaktur');
      $data['query'] = $this->Model_manufaktur->get_peru_home();
      
      $this->load->model('Model_bahan_baku');
      $data['kueri'] = $this->Model_bahan_baku->select_data_kat_home();
      $this->load->view('header');
      $this->load->view('rumah', $data);
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
