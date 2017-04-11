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

    public function profile($iduser){
      $this->load->model('Model_manufaktur');
      $this->load->helper('url');
      $data['id'] = $iduser; //ngirim 'id' ng update user trus di dekek ng valuene textbox
    $data['data_user'] = $this->Model_manufaktur->ambil_spesifik($iduser);
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
        echo "<script type='text/javascript'>
                     alert('File is an image - " . $check["mime"] . ".');</script>";
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
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

     $id_user = $this->input->post('idus');
   $nama =  $this->input->post('nama');
   $alamat =  $this->input->post('alamat');
   $notelp =  $this->input->post('notelp');
   $email =  $this->input->post('email');
   $kategori =  $this->input->post('kategori');
   $tipe =  $this->input->post('tipe');
   $butuh =  $this->input->post('butuh');
   $provinsi =  $this->input->post('provinsi');
   $kota=  $this->input->post('kota');
   $deskripsi=  $this->input->post('deskripsi');
   $kebutuhan=  $this->input->post('kebutuhan');
   $jenis=  $this->input->post('jenis');
   $jamker=  $this->input->post('jam_kerja');

     // $nama = $this->input->post('nama_kota');
      $data = array(
   'nama'=>$nama,
   'alamat'=>$alamat,
   'no_telp'=>$notelp,
   'email'=>$email,
   'kategori'=>$kategori,
   'tipe'=>$tipe,
   'barang_dibutuhkan'=>$butuh,
   'provinsi'=>$provinsi,
   'kota'=>$kota,
   'deskripsi'=>$deskripsi,
   'jumlah'=>$kebutuhan,
   'jenis_kebutuhan'=>$jenis,
   'jam'=>$jamker,
   'icon'=>$target_file

  
   );
      echo $id ." ". $nama ." ". $alamat ." ". $notelp ." ". $email ." ". $kategori ." ". $tipe ." ". $butuh ." ". $provinsi ." ". $kota ." ". $deskripsi ." ". $kebutuhan ." ". $jenis ." ". $jamker ." ". $target_file;
     /*echo "<script type='text/javascript'>
                     alert('Berhasil di update');</script>";*/
    $this->Model_manufaktur->update_profil($id_user,$data);
     //redirect('Bahan_baku/index');
    } else {
        echo "<script type='text/javascript'>
                     alert('Sorry, there was an error uploading your file.');</script>";
    }
}

  
   }
    
}
?>
