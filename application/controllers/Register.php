<?php
  Class Register extends CI_Controller{
  	function __construct(){
        parent::__construct();
        $this->load->library('MyPHPMailer'); // load library
    }

    public function index(){
      $this->load->helper('url');
      $this->load->view('register');
    }

    public function in_reg(){
    	$this->load->model('model_register');
    	$this->load->model('model_manufaktur');

			$nama 			= $this->input->post('nama');
	    $username		= $this->input->post('username');
	    $password 	= $this->input->post('password');
	    $perusahaan = $this->input->post('perusahaan');

	    $q = $this->model_manufaktur->selectSearch('user', array('username' => $this->input->post('username')));

		if ($q == null) {
		    if ($perusahaan == "Manufaktur") {
		    	$data = array(
			        'username' 		=> $username,
			        'password' 		=> md5($password),
			        'perusahaan' 	=> $perusahaan
				);

				$this->model_register->add_user($data);

				$query = $this->db->query("SELECT `id_user` FROM `user` WHERE `username` = '$username'");

				foreach ($query->result() as $row)
				{
				   $id = $row->id_user;
				}

				$data_us = array(
					'nama'			=> $nama,
		      'email' 		=> $username,
		      'id_user'		=> $id
				);

			    //enkripsi data
			    $encrypted_id = md5($username);

			    $data_kon 	= array(
			    	'konfirmasi' 	=> $encrypted_id
			    );

			    $where_kon	= array(
					'id_user' 		=> $id
				);

				$fromEmail          = "sepakat2317@gmail.com";
		        $isiEmail           = "Selamat Datang di Sepakat <br>
																	Halo " .$nama.",<br><br>
																	Anda baru saja mendaftar di Sepakat dengan data Login sebagai berikut: <br><br>
																	Username: ". $username."<br>
																	Password: ". $password ."<br><br>
																	Segera verifikasi email perusahaan Anda dengan cara klik pada link berikut ini:<br><br>
																	". base_url('register/verification/'.$encrypted_id) ."<br><br>
																	Salam hangat,<br>
																	Sepakat";
		        $mail               = new PHPMailer();
		        $mail->IsHTML(true);    // set email format to HTML
		        $mail->IsSMTP();        // we are going to use SMTP
		        $mail->SMTPAuth     = true; // enabled SMTP authentication
		        $mail->SMTPSecure   = "ssl"; // prefix for secure protocol to connect to the server
		        $mail->Host         = "smtp.gmail.com"; // setting GMail as our SMTP server
		        $mail->Port         = 465; // SMTP port to connect to GMail
		        $mail->Username     = "sepakat2317@gmail.com"; // alamat email kamu
		        $mail->Password     = "Sepakat_2317";            // password GMail
		        $mail->SetFrom('sepakat2317@gmail.com', 'Sepakat');  //Siapa yg mengirim email
		        $mail->Subject      = "Konfirmasi Akun";
		        $mail->Body 				= ($isiEmail);
		        $toEmail            = $username; // siapa yg menerima email ini
		        $mail->AddAddress($toEmail);

						$this->model_register->update_kon($where_kon, $data_kon, 'user');

						$this->model_register->add_man($data_us);

		        if(!$mail->Send()) {
		          $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Maaf server kami sedang sibuk.</div>');
							$this->load->view('login');
		        } else {
							$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Terima kasih telah bergabung dengan kami. Silahkan cek email Anda untuk mem-verifikasi akun.</div>');
							$this->load->view('login');
						}
			} else {
				$data = array(
			        'username' 		=> $username,
			        'password' 		=> md5($password),
			        'konfirmasi' 	=> 0,
			        'perusahaan' 	=> $perusahaan
				);

				$this->model_register->add_user($data);

				$query = $this->db->query("SELECT `id_user` FROM `user` WHERE `username` = '$username'");

				foreach ($query->result() as $row)
				{
				   $id = $row->id_user;
				}

				$data_us = array(
					'nama'			=> $nama,
		        	'email' 		=> $username,
		        	'id_user'		=> $id
				);

				//enkripsi data
			    $encrypted_id = md5($username);

			    $data_kon 	= array(
			    	'konfirmasi' 	=> $encrypted_id
			    );

			    $where_kon	= array(
					'id_user' 		=> $id
				);

						$fromEmail          = "sepakat2317@gmail.com";
		        $isiEmail           = "Selamat Datang di Sepakat <br>
																	Halo " .$nama.",<br><br>
																	Anda baru saja mendaftar di Sepakat dengan data Login sebagai berikut: <br><br>
																	Username: ". $username."<br>
																	Password: ". $password ."<br><br>
																	Segera verifikasi email perusahaan Anda dengan cara klik pada link berikut ini:<br><br>
																	". base_url('register/verification/'.$encrypted_id) ."<br><br>
																	Salam hangat,<br>
																	Sepakat";
						$mail               = new PHPMailer();
		        $mail->IsHTML(true);    // set email format to HTML
		        $mail->IsSMTP();        // we are going to use SMTP
		        $mail->SMTPAuth     = true; // enabled SMTP authentication
		        $mail->SMTPSecure   = "ssl"; // prefix for secure protocol to connect to the server
		        $mail->Host         = "smtp.gmail.com"; // setting GMail as our SMTP server
		        $mail->Port         = 465; // SMTP port to connect to GMail
		        $mail->Username     = "sepakat2317@gmail.com"; // alamat email kamu
		        $mail->Password     = "Sepakat_2317";            // password GMail
		        $mail->SetFrom('sepakat2317@gmail.com', 'Sepakat');  //Siapa yg mengirim email
		        $mail->Subject      = "Konfirmasi Akun Sepakat Anda";
						$mail->Body 				= ($isiEmail);
		        $toEmail            = $username; // siapa yg menerima email ini
		        $mail->AddAddress($toEmail);

						$this->model_register->update_kon($where_kon, $data_kon, 'user');

						$this->model_register->add_ban($data_us);

		        if(!$mail->Send()) {
		          $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Maaf server kami sedang sibuk.</div>');
							$this->load->view('login');
		        } else {
							$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Terima kasih telah bergabung dengan kami. Silahkan cek email Anda untuk mem-verifikasi akun.</div>');
							$this->load->view('login');
		        }
			}
		} else {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Akun dengan email tersebut sudah ada!</div>');
			$this->load->view('register');
		}
    }

    public function verification($encrypted_id){
		$this->load->model('model_register');

		$data 	= array(
            'konfirmasi' 	=> 1
        );

        $where 	= array(
        	'konfirmasi' 	=> $encrypted_id
        );
		$this->model_register->changeActiveState($where, $data, 'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Selamat, akun Anda telah aktif!</div>');
		$this->load->view('login');
		}
  }
?>
