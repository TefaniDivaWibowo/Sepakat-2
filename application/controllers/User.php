<?php
	Class User extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('model_user');
		}

		public function index(){
			$data['user'] = $this->model_user->select_data();
			$this->load->view('admin-header');
			$this->load->view('admin-user', $data);
     	$this->load->view('admin-footer');
		}

		public function hapus_user($id_user){
			$this->model_user->hapus_user($id_user);
			$this->load->view('admin-header');
			$this->load->view('admin-user', $data);
     	$this->load->view('admin-footer');
		}
	}
?>
