<?php
  Class Perusahaan extends CI_Controller{

    function __constuct(){
      parent::__constuct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('Model_manufaktur');
      $this->load->model('Model_provinsi');
      $this->load->model('Kategori');
    }

    public function index(){
      $this->load->database();
      $this->load->model('Model_manufaktur');
      $data['query']=$this->Model_manufaktur->get_peru();

      $this->load->view('header');
      $this->load->view('perusahaan-list', $data);
      $this->load->view('footer');
    }

    /*public function dat_dir(){

      $data['perusahaan'] = $this->Model_manufaktur->get_peru_single($_SESSION['id_user']);
      $data['provinsi']   = $this->Model_provinsi->select_data();

      echo '<pre>';
      print_r($data);
      echo '</pre>';

      $this->load->view('header');
      $this->load->view('perusahaan-profile', $data);
      $this->load->view('footer');
  }*/

    public function detail($id){
      $this->load->database();
      $this->load->model('Model_manufaktur');
      $this->load->model('Model_bahan_baku');

      $data['query']    = $this->Model_manufaktur->get_peru_all($id);

      $id_user          = $this->session->userdata('id_user');
      $data['kueri']    = $this->Model_bahan_baku->get_id_ban($id_user);

      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('perusahaan-detail', $data);
      $this->load->view('footer');
    }

    public function isidetail(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('perusahaan-isidetail');
      $this->load->view('footer');
    }

    public function getdetail(){
      $data = array(
        'nama' => $this->input->post('nama'),
        'deskripsi' => $this->input->post('deskripsi'),
      );

      echo "<pre>";
      print_r($data);
      echo "</pre>";
    }

    public function tipe(){
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

    public function profile(){
      $this->load->model('Model_manufaktur');

      $data['perusahaan'] = $this->Model_manufaktur->get_peru_single($_SESSION['id_user']);
      $data['provinsi']   = $this->Model_provinsi->select_data();

      /*echo '<pre>';
      print_r($data);
      echo '</pre>';*/

      $this->load->view('header');
      $this->load->view('perusahaan-profile', $data);
      $this->load->view('footer');
    }

    public function update($id){

      $this->load->model('Model_manufaktur');
      $target_dir = "assets/images/logo/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
              /* echo "<script type='text/javascript'>
                      alert('File is an image - . $check["mime"] .');
                    </script>";*/
              $uploadOk = 1;
          } else {
              echo "<script type='text/javascript'>
                           alert('File is not an image.');</script>";
              $uploadOk = 0;
          }
      }

      // Check if file already exists
//       if (file_exists($target_file)) {
//          echo "<script type='text/javascript'>
//                            alert('Sorry, file already exists.');</script>";
//           $uploadOk = 0;
//       }

      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 5000000) {
         echo "<script type='text/javascript'>
                           alert('Sorry, your file is too large.');</script>";
          $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
         echo "<script type='text/javascript'>
                           alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
          $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "<script type='text/javascript'>
                           alert('Sorry, your file was not uploaded.');</script>";

      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

           $id_user   = $this->input->post('idus');
           $nama      =  $this->input->post('nama');
           $alamat    =  $this->input->post('alamat');
           $provinsi  =  $this->input->post('provinsi');
           $kota      =  $this->input->post('kota');
           $notelp    =  $this->input->post('notelp');
           $email     =  $this->input->post('email');
           $tipe      =  $this->input->post('tipe');
           $butuh     =  $this->input->post('butuh');
           $banyak    =  $this->input->post('banyak');

           /*$kebutuhan=  $this->input->post('kebutuhan');
           $jenis=  $this->input->post('jenis');
           $jamker=  $this->input->post('jam_kerja');*/

           // $nama = $this->input->post('nama_kota');
            $data = array(
               'nama'     =>$nama,
               'alamat'   =>$alamat,
               'provinsi' =>$provinsi,
               'kota'     =>$kota,
               'no_telp'  =>$notelp,
               'email'    =>$email,
               'tipe'     =>$tipe,
               'barang_dibutuhkan'  =>$butuh,
               'banyak_kebutuhan'   =>$banyak,
               'icon'               =>$target_file
            );

            /*echo $id ." ". $nama ." ". $alamat ." ". $provinsi ." ". $kota ." ". $notelp ." ". $email ." ". $tipe ." ". $butuh ."  ". $banyak ." ". $target_file;*/

            $this->Model_manufaktur->update_profil($id_user,$data);
            redirect(base_url('perusahaan/profile'));

          } else {
              echo "<script type='text/javascript'>
                           alert('Sorry, there was an error uploading your file.');</script>";
          }
      }
   }

   ublic function getComboBahan($kategori) {
     $this->load->database();

     $this->load->model('model_kategori');
     $id['id'] = $this->model_kategori->select_id($kategori);

     /*echo '<pre>';
     print_r($id);
     echo '</pre>';*/
     foreach ($id as $id_kat) {
       $id_fin = $id_kat[0]['id_kategori'];
     }

     $dataComboBahan =  $this->db->select('nama_bb')
          ->from('barang_bahan')
          ->join('kategori', 'kategori.id_kategori = barang_bahan.id_kategori')
          ->where('kategori.id_kategori', $id_fin)
          ->get()
          ->result_array();

     foreach($dataComboBahan as $optionComboBahan){
       echo "<option value='".$optionComboBahan['nama_bb']."'>".$optionComboBahan['nama_bb']."</option>";
     }
   }

    public function getComboKota($provinsi) {
      $this->load->database();
      $dataComboKota =  $this->db->select('kota')
           ->from('kota')
           ->where(array("kota.provinsi" => $provinsi))
           ->get()
           ->result_array();
      foreach($dataComboKota as $optionComboKota){
        echo "<option value='".$optionComboKota['kota']."'>".$optionComboKota['kota']."</option>";
      }
    }

    public function up_gamlat(){
      $this->load->model('model_manufaktur');
      $target_dir = "assets/images/gambarlatar/";
      $target_file = $target_dir . basename($_FILES["fileLatar"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      // Check if image file is a actual image or fake image
      if(isset($_POST["gambar"])) {
          $check = getimagesize($_FILES["fileLatar"]["tmp_name"]);
          if($check !== false) {
              $uploadOk = 1;
          } else {
              echo "<script type='text/javascript'>
                           alert('File is not an image.');</script>";
              $uploadOk = 0;
          }
      }

      // Check if file already exists
      if (file_exists($target_file)) {
         echo "<script type='text/javascript'>
                           alert('Sorry, file already exists.');</script>";
          $uploadOk = 0;
      }

      // Check file size
      if ($_FILES["fileLatar"]["size"] > 500000) {
         echo "<script type='text/javascript'>
                           alert('Sorry, your file is too large.');</script>";
          $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
         echo "<script type='text/javascript'>
                           alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
          $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "<script type='text/javascript'>
                           alert('Sorry, your file was not uploaded.');</script>";

      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileLatar"]["tmp_name"], $target_file)) {

            $id_user  = $this->input->post('id_user');

            $data = array(
             'gambar_latar' => $target_file
            );

            $this->model_manufaktur->update_gamlat($id_user, $data);
            redirect('perusahaan/dat_dir/');

          } else {
              echo "<script type='text/javascript'>
                     alert('Sorry, there was an error uploading your file.');</script>";
          }
      }
  }

  public function kerjasama(){
      $this->load->model('model_kerjasama');

      $id = $this->input->post('idb');
      $idm  = $this->input->post('idm');

      $data = array(
          'id_manufaktur' => $this->input->post('idm'),
          'id_bahan_baku' => $this->input->post('idb'),
          'konfirmasi' 	  => 0,
          'pengirim' 	  => 'Bahan Baku'
      );

      $this->model_kerjasama->tambah_kerjasama($data);

      redirect('perusahaan/detail/'.$this->input->post('idm'));
  }

  public function notifikasi(){
      $this->load->model('model_bahan_baku');
      $this->load->model('model_manufaktur');
      $this->load->model('model_kerjasama');

      $notif = array('isinotif' => $this->model_kerjasama->get_kerjasama_manufaktur($_SESSION['id_manufaktur']),);
      $this->session->set_userdata($notif);

      echo "<pre>";
      print_r($data);
      print_r($_SESSION);
      echo "</pre>";
  }

}
?>
