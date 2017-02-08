<?php
	Class Tes extends CI_Controller{
		public function masuk(){
			$this->load->view('tes');
		}

		public function belum_masuk(){
			$this->load->view('not_in');
		}
	}
?>