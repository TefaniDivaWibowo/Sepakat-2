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
}
