<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan_baku extends CI_Controller {

	public function index(){
      $this->load->view('header');
      $this->load->view('penyedia-list');
      $this->load->view('footer');
	}

	public function admin(){
		$this->load->library('form_validation');
		$this->load->model('model_bahan_baku');

		$data['bahan_baku'] = $this->model_bahan_baku->select_data();
	    $this->load->view('admin-header');
	    $this->load->view('admin-bahan-baku', $data);
	    $this->load->view('admin-footer');
    }
}
