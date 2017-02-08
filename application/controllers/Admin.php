<?php
  Class Admin extends CI_Controller{

    function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->model('kategori');
    }

    public function index(){
      $this->load->helper('url');
      $this->load->view('admin-header');
      $this->load->view('admin-home');
      $this->load->view('admin-footer');
    }

    //Kategori
    public function kategori(){
      $this->load->helper('url');
      $this->load->model('kategori');

      $data['kategori']=$this->kategori->get_all_categories();
      $this->load->view('admin-header');
      $this->load->view('admin-kategori', $data);
      $this->load->view('admin-footer');
    }

    public function tambah_kategori(){
        $data = array(
          'kategori' => $this->input->post('kategori')
        );
        $q = $this->kategori->selectSearch('kategori', array('kategori' => $this->input->post('kategori')));
        if($q == null){
          $this->kategori->tambah_kategori($data);
          echo "Data insert successfully";
         }
         else {
          echo 'Fail';
         }
    }
    
    public function kategori_edit($id){
      $this->load->model('kategori');
      $data = $this->kategori->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
    }

    public function update_kategori(){
      $data   = array('kategori' => $this->input->post('kategori'));
      $where  = array('id_kategori' => $this->input->post('idkat'));

      $this->kategori->update_kategori($where, $data);

      $q = $this->kategori->selectSearch('kategori', array('kategori' => $this->input->post('kategori')));

      if($q == null){
        $this->kategori->update_kategori($where,$data);
        echo "Data has been updated";
      }
      else {
          echo "Fail to update data";
      }
    }

    public function delete_kategori($id){
      $this->load->model('kategori');

      $this->kategori->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

    //Barang Bahan
    public function barang_bahan(){
      $this->load->library('form_validation');
      $this->load->model('model_barang_bahan');

      $data['barang_bahan'] = $this->model_barang_bahan->select_data();
      $this->load->view('admin-header');
      $this->load->view('admin-barang-bahan', $data);
      $this->load->view('admin-footer');
    }

    //Provinsi
    public function provinsi(){
      $this->load->library('form_validation');
      $this->load->model('model_provinsi');

      $data['provinsi'] = $this->model_provinsi->select_data();
      $this->load->view('admin-header');
      $this->load->view('admin-provinsi', $data);
      $this->load->view('admin-footer');
    }

    //Kota
    public function kota(){
      $this->load->library('form_validation');
      $this->load->model('model_kota');

      $data['kota'] = $this->model_kota->select_data();
      $this->load->view('admin-header');
      $this->load->view('admin-kota', $data);
      $this->load->view('admin-footer');
    }
  }
?>
