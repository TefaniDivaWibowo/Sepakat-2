<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufaktur extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('model_manufaktur');
		}

	public function index()
	{
      $this->load->view('header');
      $this->load->view('perusahaan-list');
      $this->load->view('footer');
	}

	public function admin(){
		$data['manufaktur'] = $this->model_manufaktur->select_data();
	    $this->load->view('admin-header');
	    $this->load->view('admin-manufaktur', $data);
	    $this->load->view('admin-footer');
    }
}
