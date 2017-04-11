
<?php
  Class Login extends CI_Controller{

  	//Controller nya juga tak samakan

  	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
		$this->load->library('session');
	}

    public function index(){
    	$err = $this->input->get('err');
		switch ($err) {
			case 'ups':
			$data['teror'] = "Username / Password Salah";
				break;
			case 'upk':
			$data['teror'] = "Username / Password Kosong";
				break;
			case 'ad':
			$data['teror'] = "Access Denied";
				break;
			default:
			$data['teror'] = "";
				break;
		}

<<<<<<< HEAD
			if ($this->session->userdata('tipe_user') == "Bahan Baku"){
				redirect('penyedia/profile?id='.$this->session->userdata('id_user'));
			}
			else if ($this->session->userdata('tipe_user') == "Admin") {
				redirect('admin');
=======
			if ($this->session->userdata('tipe_user') == null){
				$this->load->view('login', $data);
>>>>>>> 1ec2a7517f7e212f3dc95bf547a7e160088be3e7
			}
			else if ($this->session->userdata('tipe_user') == "Manufaktur"){
				redirect('perusahaan/profile?id='.$this->session->userdata('id_user'));
			}
			else {
				$this->load->view('login', $data);
			}
    }

    public function kliklogin()
	{
		if(null !== $this->input->post('lgnbtn')){
			$username =  $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => md5($password)
				);

			$q  	= $this->model_login->select($data, 'user');
			
// 			echo "<pre>";
// 			print_r($q);
// 			echo "</pre>";

			if(null !== $q){
<<<<<<< HEAD
// 				$this->session->set_userdata('tipe_user', $q['perusahaan']);
// 				$this->session->set_userdata('id_user', $q['id_user']);
// 				$this->session->set_userdata('konfirmasi', $q['konfirmasi']);
// 				$this->session->set_userdata('username', $q['username']);
// 				$this->session->set_userdata('status', 'login');
				$this->load->model('Model_bahan_baku');
				$this->load->model('Model_manufaktur');
				$this->load->model('Model_user');

				$id_bahan_baku = $this->Model_user->get_id_bahan_baku($q['id_user']);
				$notif = $this->Model_bahan_baku->get_notif($id_bahan_baku[0]['id_bahan_baku']);

				$id_manufaktur = $this->Model_user->get_id_manufaktur($q['id_user']);
				$notif = $this->Model_bahan_baku->get_notif($id_manufaktur[0]['id_manufaktur']);

				$array = array(
					'tipe_user' 		=> $q['perusahaan'],
					'id_user' 			=> $q['id_user'],
					'konfirmasi' 		=> $q['konfirmasi'],
					'username' 			=> $q['username'],
					'status' 			=> 'login',
					'notif_pen'			=> $notif,
				);


				
				$this->session->set_userdata($array);
				
				/*echo "<pre>";
				print_r($_SESSION);
				print_r($notif);
				echo "</pre>";
				echo "<pre>";
				print_r($id_bahan_baku[0]['id_bahan_baku']);
				echo "</pre>";
				die;*/
				
				$man	= $this->model_login->select(array("id_user" => $q['id_user']), 'manufaktur');
				$ban	= $this->model_login->select(array("id_user" => $q['id_user']), 'bahan_baku');

				if($q['perusahaan'] == "Manufaktur" && $q['konfirmasi'] == 1 ){
					if($man['alamat'] == NULL){
						redirect('index.php/perusahaan/profile?id='.$this->session->userdata('id_user'));
					} else {
						redirect('index.php/feed/perusahaan?id='.$this->session->userdata('id_user'));
					}
=======
				$this->session->set_userdata('tipe_user', $q['perusahaan']);
				$this->session->set_userdata('id_user', $q['id_user']);
				$this->session->set_userdata('konfirmasi', $q['konfirmasi']);
				$this->session->set_userdata('username', $q['username']);
				$this->session->set_userdata('status', 'login');

				if($q['perusahaan'] == "manufaktur" && $q['konfirmasi'] == 1 ){
					$this->load->view('header');
					$this->load->view('rumah');
					$this->load->view('footer');
>>>>>>> 1ec2a7517f7e212f3dc95bf547a7e160088be3e7
				}
				else if($q['perusahaan'] == "Bahan Baku" && $q['konfirmasi'] == 1){
					if($man['alamat'] == NULL){
						redirect('index.php/penyedia/profile?id='.$this->session->userdata('id_user'));
					} else {
						redirect('index.php/feed/penyedia?id='.$this->session->userdata('id_user'));
					}
				}
				else if($q['perusahaan'] == "Admin" && $q['konfirmasi'] == 1){
					redirect('index.php/admin?id='.$this->session->userdata('id_user'));
				}
				else if($q['perusahaan'] == "Manufaktur" && $q['konfirmasi'] != 1 ){
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Mohon konfirmasi terlebih dahulu akun Anda!</div>');	
					$this->load->view('login');
				}
				else if($q['perusahaan'] == "Bahan Baku" && $q['konfirmasi'] != 1){
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Mohon konfirmasi terlebih dahulu akun Anda!</div>');
					$this->load->view('login');
				}
				else {
					echo "<script>alert('Access Denied!')</script>";
					redirect('login?err=ad');
				}
			}
			else {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Username atau password Anda salah!</div>');
					redirect('login?err=ups');
				// echo $this->error;
			}
		}
		else {
			$this->error = "<script>alert('Username/Password Kosong');</script>";
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Mohon cek kembali detail login anda.</div>');
			redirect('login?err=upk');
		}
	}

	public function routeAdmin($userid)
	{
		redirect('admin/'+$userid);
	}

	public function logout()
	{
<<<<<<< HEAD
// 		$this->session->unset_userdata('tipe_user');
// 		$this->session->unset_userdata('id_user');
// 		$this->session->sess_destroy();
=======
		$this->session->unset_userdata('tipe_user');
		$this->session->unset_userdata('id_user');
		$this->session->sess_destroy();
>>>>>>> 1ec2a7517f7e212f3dc95bf547a7e160088be3e7
    session_destroy();
		redirect(base_url());
	}

  }
?>
