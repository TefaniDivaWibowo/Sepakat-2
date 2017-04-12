<?php
  Class Admin extends CI_Controller{

    function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('kategori');
      $this->load->model('model_provinsi');
      $this->load->model('model_user');
      $this->load->model('model_manufaktur');
      $this->load->model('model_kota');
      $this->load->model('model_barang_bahan');
      $this->load->model('model_bahan_baku');
    }

    public function index(){
      $this->load->helper('url');
      $this->load->view('admin-header');
      $this->load->view('admin-home');
      $this->load->view('admin-footer');
    }

    //Kategori
    public function kategori(){
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
function insert_barang()
   {
   $this->load->model('model_barang_bahan');
   $nama =  $this->input->post('nama');
   $kategori =  $this->input->post('kategori');
  
   if($this->input->post('submit')){
     $data = array(
   'nama_bb'=>$nama,
   'id_kategori'=>$kategori
  
   );
  
    $this->model_barang_bahan->tambah_barang_bahan($data);
   redirect('Admin/barang_bahan');
   }
  }
   public function del_bar($id)
   {
   
      $this->load->model('model_barang_bahan');
      
    $this->model_barang_bahan->delete_row($id);
    redirect('admin/barang_bahan');
   }
   public function barang_edit($id){
      $this->load->model('model_barang_bahan');
      $data = $this->model_barang_bahan->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
    }
public function update_bar(){
      $data   = array('nama_bb' => $this->input->post('nama'),
        'id_kategori'=>$this->input->post('kategori'));
      $where  = array('id_bb' => $this->input->post('idbar'));

      $this->model_barang_bahan->update_bar($where, $data);
        echo "Data has been updated";
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
function insert_prov()
   {
   $this->load->model('model_provinsi');
   $nama =  $this->input->post('namas');
  
   if($this->input->post('submit')){
     $data = array(
   'provinsi'=>$nama
  
   );
  
    $this->model_provinsi->tambah_prov($data);
   redirect('Admin/provinsi');
   }
  }
  public function del_prov($provinsi)
   {
   
      $this->load->model('model_provinsi');
      
    $this->model_provinsi->delete_row($provinsi);
    redirect('admin/provinsi');
   }
   public function provinsi_edit($id){
      $this->load->model('model_provinsi');
      $data = $this->model_provinsi->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
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
function insert_kota()
   {
   $this->load->model('model_kota');
   $nama =  $this->input->post('namas');
   $prov =  $this->input->post('provs');
  
   if($this->input->post('submit')){
     $data = array(
   'kota'=>$nama,
   'provinsi'=>$prov
  
   );
  
    $this->model_kota->tambah_kota($data);
   redirect('Admin/kota');
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

  public function kota_edit($id){
      $this->load->model('model_kota');
      $data = $this->model_kota->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
    }
    public function update_kot(){
      $data   = array('kota' => $this->input->post('nama'),
        'provinsi' => $this->input->post('prov'));
      $where  = array('id_kota' => $this->input->post('idkot'));

      $this->model_kota->update_kota($where, $data);
        echo "Data has been updated";
    }
public function del_kota($id)
   {
   
      $this->load->model('model_kota');
      
    $this->model_kota->delete_row($id);
    redirect('admin/kota');
   }
    //User
    public function user(){
			$data['user'] = $this->model_user->select_data();
			$this->load->view('admin-header');
			$this->load->view('admin-user', $data);
     	$this->load->view('admin-footer');
		}
public function user_edit($id){
      $this->load->model('model_user');
      $data = $this->model_user->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
    }

public function update_user(){
      $data   = array('username' => $this->input->post('user'),
        'password'=>$this->input->post('password'));
      $where  = array('id_user' => $this->input->post('iduser'));

      $this->model_user->update_user($where, $data);
        echo "Data has been updated";
    }

public function del_user($id)
   {
   
      $this->load->model('model_user');
      
    $this->model_user->delete_row($id);
    redirect('admin/user');
   }
function insert_user()
   {
   $this->load->model('model_user');
   $username =  $this->input->post('usernames');
   $pass =  $this->input->post('passwords');
   $perus =  $this->input->post('peruss');
  
   if($this->input->post('submit')){
     $data = array(
   'username'=>$username,
   'password'=>$pass,
   'perusahaan'=>$perus,
   'konfirmasi'=>'1'
  
   );
  
    $this->model_user->tambahuser($data);
   redirect('Admin/user');
   }
  }
    //Manufaktor
    public function manufaktur(){
  		$data['manufaktur'] = $this->model_manufaktur->select_data();
  	  $this->load->view('admin-header');
  	  $this->load->view('admin-manufaktur', $data);
  	  $this->load->view('admin-footer');
    }
function insert_manu()
   {
   $this->load->model('model_manufaktur');
           $nama =  $this->input->post('namas');
           $alamat =  $this->input->post('alamats');
           $provinsi =  $this->input->post('provinsis');
           $kota=  $this->input->post('kotas');
           $notelp =  $this->input->post('nos');
           $email =  $this->input->post('emails');
           $tipe =  $this->input->post('tipes');
           $butuh =  $this->input->post('butuhs');
           $banyak =  $this->input->post('banyaks');
   if($this->input->post('submit')){
     $data = array(
        'nama'=>$nama,
               'alamat'=>$alamat,
               'provinsi'=>$provinsi,
               'kota'=>$kota,
               'no_telp'=>$notelp,
               'email'=>$email,
               'tipe'=>$tipe,
               'barang_dibutuhkan'=>$butuh,
               'banyak_kebutuhan'=>$banyak
  
   );
  
    $this->model_manufaktur->tambah_manufaktur($data);
   redirect('Admin/manufaktur');
   }
  }
   public function update_manu(){
     
      $data   = array(
               'nama'=>$this->input->post('nama'),
               'alamat'=>$this->input->post('alamat'),
               'provinsi'=>$this->input->post('provinsi'),
               'kota'=>$this->input->post('kota'),
               'no_telp'=>$this->input->post('no'),
               'email'=>$this->input->post('email'),
               'tipe'=>$this->input->post('tipe'),
               'barang_dibutuhkan'=>$this->input->post('butuh'),
               'banyak_kebutuhan'=>$this->input->post('banyak')
               );
      $where  = array('id_manufaktur' => $this->input->post('idmanu'));

      $this->model_manufaktur->update_manu($where, $data);
        echo "Data has been updated";
    }
public function del_manu($id)
   {
   
      $this->load->model('model_manufaktur');
      
    $this->model_manufaktur->delete_row($id);
    redirect('admin/manufaktur');
   }
   public function manu_edit($id){
      $this->load->model('model_manufaktur');
      $data = $this->model_manufaktur->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
    }
    //Bahan Baku
    public function bahan_baku(){
  		$this->load->library('form_validation');
  		$this->load->model('model_bahan_baku');

  		$data['bahan_baku'] = $this->model_bahan_baku->select_data();
  	    $this->load->view('admin-header');
  	    $this->load->view('admin-bahan-baku', $data);
  	    $this->load->view('admin-footer');
      }
      function insert_bahan()
   {
   $this->load->model('model_bahan_baku');
  
   if($this->input->post('submit')){
     $data = array(
        'nama'         => $this->input->post('namas'),
        'alamat'      => $this->input->post('alamats'),
        'no_telp'       => $this->input->post('nos'),
        'email'       => $this->input->post('emails'),
        'total_produksi'  => $this->input->post('totals'),
        'kategori'      => $this->input->post('kategoris'),
        'barang_bahan'    => $this->input->post('hasils'),
        'provinsi'      => $this->input->post('provinsis'),
        'kota'        => $this->input->post('kotas')
  
   );
  
    $this->model_bahan_baku->tambahbahan($data);
   redirect('Admin/bahan_baku');
   }
  }
public function update_bahan(){
      $data   = array(
        'nama'         => $this->input->post('nama'),
        'alamat'      => $this->input->post('alamat'),
        'no_telp'       => $this->input->post('no'),
        'email'       => $this->input->post('email'),
        'total_produksi'  => $this->input->post('total'),
        'kategori'      => $this->input->post('kategori'),
        'barang_bahan'    => $this->input->post('hasil'),
        'provinsi'      => $this->input->post('provinsi'),
        'kota'        => $this->input->post('kota'));
      $where  = array('id_bahan_baku' => $this->input->post('idbahan'));

      $this->model_bahan_baku->update_bahan($where, $data);
        echo "Data has been updated";
    }


  public function del_bahan($id)
   {
   
      $this->load->model('model_bahan_baku');
      
    $this->model_bahan_baku->delete_row($id);
    redirect('admin/bahan_baku');
   }
    public function bahan_edit($id){
      $this->load->model('model_bahan_baku');
      $data = $this->model_bahan_baku->get_by_id($id);
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      echo json_encode($data);
    }

    //Postingan
    public function posting(){
      $this->load->library('form_validation');
      $this->load->model('model_postingan');

      $data['posting'] = $this->model_postingan->select_data();
        $this->load->view('admin-header');
        $this->load->view('admin-posting', $data);
        $this->load->view('admin-footer');
      }
  }
?>
