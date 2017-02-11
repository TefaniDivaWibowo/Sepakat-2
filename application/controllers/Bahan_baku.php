<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan_baku extends CI_Controller {

	public function index(){

	  $this->load->database();
      $this->load->model('Model_bahan_baku');
      $data['query']=$this->Model_bahan_baku->get_bahan();

      $this->load->view('header');
      $this->load->view('penyedia-list', $data);
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

 public function tipe()
    {
        $this->load->model('Model_bahan_baku');
        // $ban = implode(',', $_POST['banyak']);
            
            if($this->input->post('banyak[]') == NULL && $this->input->post('rad[]') == NULL && $this->input->post('tipes[]') !== NULL){
              $keyword = implode(',', $_POST['tipes']); 
              $data['query'] = $this->Model_bahan_baku->carr($keyword);
              
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('penyedia-list',$data);
        $this->load->view('footer');
            }elseif($this->input->post('banyak[]') !== NULL && $this->input->post('rad[]') == NULL && $this->input->post('tipes[]') == NULL){
              $ban = implode(',', $_POST['banyak']); 
              $data['query'] = $this->Model_bahan_baku->carri($ban);
              
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('penyedia-list',$data);
        $this->load->view('footer');
            }elseif($this->input->post('banyak[]') == NULL && $this->input->post('tipes[]') == NULL && $this->input->post('rad[]') !== NULL)
            {
              $rad = implode(',', $_POST['rad']); 
              $data['query'] = $this->Model_bahan_baku->carl($rad);
               $this->load->helper('url');
               $this->load->view('header');
               $this->load->view('penyedia-list',$data);
               $this->load->view('footer');
            }
           

    }

    public function tombol()
     {
/*echo "<script>
alert('There are no fields to generate a report');
</script>";*/
     $this->tipe();
        }
     

}
?>