<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan_baku extends CI_Controller {

	public function show_detail($id){

	  $this->load->database();
      $this->load->model('Model_bahan_baku');
      $data['query']=$this->Model_bahan_baku->get_bahan($id);

      $this->load->view('header');
      $this->load->view('penyedia-list', $data);
      $this->load->view('footer');
	}	

	public function showmore_detail($id){
      $this->load->database();
		 
      $this->load->model('Model_bahan_baku');
      $data['query'] 	= $this->Model_bahan_baku->get_databahan($id);
		
			$id_user    		= $this->session->userdata('id_user');
			$data['idm'] 		= $this->Model_bahan_baku->get_idm($id_user);

      $this->load->view('header');
      $this->load->view('penyedia-detail', $data);
      $this->load->view('footer');
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
