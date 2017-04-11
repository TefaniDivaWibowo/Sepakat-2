<head>
  <title>Sepakat</title>

  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>"/>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style-extra.css"); ?>"/>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>"/>
</head>
<body>

  <div class="container-fluid register-background">
    <div class="main-register">
      <div class="container register-box">
        <div class="row register-header">
          <a href="<?php echo base_url();?>home"><i class="fa fa-fw fa-2x fa-handshake-o"></i><br />
          <p>Sepakat</p></a><br />
        </div>
        <div class="row register-content">
          <div class="col-xs-12">
            <h3 class="text-center">Register akun baru</h3><br />
            
            <?php echo $this->session->flashdata('pesan');?>
            <form action="<?= base_url('register/in_reg');?>" method="post">
             <div class="input-group" style="border-top:1px solid #d4d4d4;border-bottom:1px solid #d4d4d4;">
              <div class="input-group-addon"><i class="fa fa-user-circle" style="color: #5199ee"></i></div>
              <input type="text" class="form-control" name="nama" placeholder="Nama Perusahaan" autofocus style="font-size:140%;"> 
            </div>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-fw fa-envelope" style="color: #5199ee"></i></div>
              <input type="text" class="form-control" name="username" placeholder="Alamat Email Perusahaan" style="font-size:140%;">
            </div>
            <div class="input-group" style="border-top:1px solid #d4d4d4;border-bottom:1px solid #d4d4d4;">
              <div class="input-group-addon"><i class="fa fa-fw fa-key" style="color: #5199ee"></i></div>
              <input type="password" class="form-control" name="password" placeholder="Password" style="font-size:140%;">
            </div>
            <br>
            Sebagai Perusahaan:
            <br>
              <div class="col-md-6" style="padding:0px;">
                <label class="radio-inline">
                  <input type="radio" name="perusahaan" id="perusahaan" value="Manufaktur"> Perusahaan Manufaktur
                </label>
              </div>
              <div class="col-md-6" style="padding:0px;">
                <label class="radio-inline">
                  <input type="radio" name="perusahaan" id="penyedia" value="Bahan Baku"> Perusahaan Penyedia
                </label>
              </div>
              <br /><br />
            <input type="submit" name="submit" class="btn btn-primary btn-block btn-register" value="Register">
            </form>

          </div>
        </div>
        <!--<div class="row register-alternative">
          <div class="col-xs-12">
            <br/><br/>
            <span style="color:#8a8a8a;">Atau register dengan</span><br /><br />
            <span class="fa-stack fa-2x media-icon"><i class="fa fa-circle fa-stack-2x media-icon"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>
            <span class="fa-stack fa-2x media-icon"><i class="fa fa-circle fa-stack-2x media-icon"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>
            <span class="fa-stack fa-2x media-icon"><i class="fa fa-circle fa-stack-2x media-icon"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span>
          </div>
        </div>-->
      </div>
      <div class="container" style="font-size:80%;padding-top:0px;">
        <div class="col-xs-12 text-center">
          <p>Sudah punya akun? <a href="<?php echo base_url('Login/');?>">Login di sini</a>.</p>
        </div>
      </div>
    </div>
    </div>

  <script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
  <script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
