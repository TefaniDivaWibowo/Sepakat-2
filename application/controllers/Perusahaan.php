<?php
  Class Perusahaan extends CI_Controller{
    public function index(){
      $this->load->database();
      $this->load->model('Model_manufaktur');
      $data['query']=$this->Model_manufaktur->get_peru();

      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('perusahaan-list', $data);
      $this->load->view('footer');
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

     public function tipe()
    {
        $this->load->model('Model_manufaktur');
        // $ban = implode(',', $_POST['banyak']);
            
            if($this->input->post('banyak[]') == NULL && $this->input->post('rad[]') == NULL && $this->input->post('tipes[]') !== NULL){
              $keyword = implode(',', $_POST['tipes']); 
              $data['query'] = $this->Model_manufaktur->carr($keyword);
              
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('perusahaan-list',$data);
        $this->load->view('footer');
            }elseif($this->input->post('banyak[]') !== NULL && $this->input->post('rad[]') == NULL && $this->input->post('tipes[]') == NULL){
              $ban = implode(',', $_POST['banyak']); 
              $data['query'] = $this->Model_manufaktur->carri($ban);
              
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('perusahaan-list',$data);
        $this->load->view('footer');
            }elseif($this->input->post('banyak[]') == NULL && $this->input->post('tipes[]') == NULL && $this->input->post('rad[]') !== NULL)
            {
              $rad = implode(',', $_POST['rad']); 
              $data['query'] = $this->Model_manufaktur->carl($rad);
               $this->load->helper('url');
               $this->load->view('header');
               $this->load->view('perusahaan-list',$data);
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
