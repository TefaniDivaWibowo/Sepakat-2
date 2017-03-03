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

			if ($this->session->userdata('tipe_user') == null){
				$this->load->view('login', $data);
			}
			else if ($this->session->userdata('tipe_user') == 1){
				redirect('manufaktur?id='.$this->session->userdata('id_user'));
			}
			else {
				redirect('bahan_baku?id='.$this->session->userdata('id_user'));
			}
    }

    public function kliklogin()
	{
		if(null !== $this->input->post('lgnbtn')){
			$username =  $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => $password
				);

			$q = $this->model_login->select($data, 'user');

			if(null !== $q){
				$this->session->set_userdata('tipe_user', $q['perusahaan']);
				$this->session->set_userdata('id_user', $q['id_user']);
				$this->session->set_userdata('konfirmasi', $q['konfirmasi']);
				$this->session->set_userdata('username', $q['username']);
				$this->session->set_userdata('status', 'login');

				if($q['perusahaan'] == "manufaktur" && $q['konfirmasi'] == 1 ){
					$this->load->view('header');
					$this->load->view('rumah');
					$this->load->view('footer');
				}
				else if($q['perusahaan'] == "bahan baku" && $q['konfirmasi'] == 1){
					$this->load->view('header');
					$this->load->view('rumah');
					$this->load->view('footer');
				}
				else if($q['perusahaan'] == "manufaktur" && $q['konfirmasi'] == 0 ){
					echo "Mohon konfirmasi terlebih dahulu akun Anda!";
					echo "<a href='"; ?> <?php echo base_url("index.php/login/")?>. <?php echo "'><button>OK</button></a>";
				}
				else if($q['perusahaan'] == "bahan baku" && $q['konfirmasi'] == 0){
					echo "Mohon konfirmasi terlebih dahulu akun Anda!";
					echo "<a href='"; ?> <?php echo base_url("index.php/login/")?>. <?php echo "'><button>OK</button></a>";
				}
				else if($q['perusahaan'] == "admin" && $q['konfirmasi'] == 1){
					redirect('admin?id='.$q['id_user']);
				}
				else {
					echo "<script>alert('Access Denied!')</script>";
					redirect('login?err=ad');
				}
			}
			else {
				$this->error = "<script>alert('Username/Password Salah');</script>";
				redirect('login?err=ups');
				// echo $this->error;
			}
		}
		else {
			$this->error = "<script>alert('Username/Password Kosong');</script>";
			redirect('login?err=upk');
		}
	}

	public function routeAdmin($userid)
	{
		redirect('admin/'+$userid);
	}

	public function logout()
	{
		$this->session->unset_userdata('tipe_user');
		$this->session->unset_userdata('id_user');
		$this->session->sess_destroy();
    session_destroy();
		redirect(base_url());
	}

  }
?>
