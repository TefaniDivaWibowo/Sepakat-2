<head>
    <title>Sepakat</title>

<link rel="shortcut icon" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/style-extra.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/summernote.css"); ?>"/>
<link rel="stylesheet" href="<?= base_url("assets/css_feed/modal.css");?>">

<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/summernote.min.js"); ?>"></script>

<script language="Javascript" type="text/javascript" src="<?=base_url('assets/js_feed/script.js');?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.7/summernote.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.7/summernote.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

<link rel="" href="<?php echo base_url();?>"/>

<style>
    .main-banner{
        background-image: url("<?php echo base_url("assets/images/mainBanner.jpg"); ?>");
        height: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main-banner:before{
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.6);
        z-index: 1;
    }
    .main-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
    .sub-banner{
        background-image: url("<?php echo base_url("assets/images/mainBanner.jpg"); ?>");
        height: 80%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .sub-banner:before{
        content: '';
        width: 100%;
        height: 80%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.6);
        z-index: 1;
    }
    .sub-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
    .solid-banner{
        background-color: #51c4de;
        height: 80%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .solid-banner:before{
        content: '';
        width: 100%;
        height: 80%;
        position: absolute;
        left: 0px;
        background: rgba(0,0,0,0.2);
        z-index: 1;
    }
    .solid-banner>.container{
        z-index: 999;
        position: relative;
        text-align: center;
    }
</style>
</head>

<body>

<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<nav id="navigate"class="nav navbar navbar-default navbar-fixed-top">
  <div class="container" style="padding:0;">
    <div class="pull-left">
      <a class="navbar-brand"><i class="fa fa-fw fa-2x fa-handshake-o"></i></a>
    </div>

    <?php
      if($this->session->userdata('status') == "login"){
        echo "<div class='pull-right'>";
        echo "<a class='navbar-brand' onclick='openNav()'><i class='fa fa-user fa-2x'></i></a>";
        echo "</div>";
      } else {
        echo "<div class='pull-right'>";
        echo "<a class='navbar-brand'><i class='fa fa-fw fa-2x fa-handshake-o'></i></a>";
        echo "</div>";
      }
    ?>
    <div class="nav-menu navbar-collapse collapse">
      <ul class="nav" style="display:block;text-align:center;">

        <?php
            if($this->session->userdata('status') != "login"){
                echo "<li class='active'><a href='". base_url('Home/') . "'>Beranda</a></li>";
                echo "<li class=''><a href='#PerusahaanMan'>Cari Perusahaan Manufaktur</a></li>";
                echo "<li class=''><a href='#PerusahaanBan'>Cari Perusahaan Bahan Baku</a></li> ";
                echo "<li class=''><a href='". base_url('index.php/Login/') ."'>Masuk</a></li>";
                echo "<li class=''><a href='". base_url('index.php/Register') ."'>Daftar</a></li>";
            }elseif ($this->session->userdata('tipe_user') == 'Manufaktur' && $this->session->userdata('status') == "login") {
                echo "<li class=''><a href='". base_url('index.php/Feed/perusahaan/') ."'>Feed</a></li>";
                echo "<li class=''><a href='" . base_url('index.php/penyedia/list_kategori') . "'>Cari Perusahaan Bahan Baku</a></li> ";
                echo "<li class=''><a href='". base_url('index.php/Perusahaan/profile') ."'>Data Diri</a></li>";
                echo "<li class=''><a data-toggle='modal' data-target='#ModalNotif'>Notifikasi <span class='label-primary'>".$this->session->userdata('notif_man')."</span></a></li>";
                echo "<li class=''><a href='". base_url('index.php/Login/logout') ."'>Logout</a></li>";
            }elseif ($this->session->userdata('tipe_user') == 'Bahan Baku' && $this->session->userdata('status') == "login") {
                echo "<li class=''><a href='". base_url('index.php/Penyedia/isidetail') ."'>Feed</a></li>";
                echo "<li class=''><a href='" . base_url('index.php/Perusahaan/') . "'>Cari Perusahaan Manufaktur</a></li> ";
                echo "<li class=''><a href='". base_url('index.php/Penyedia/profile/') ."'>Data Diri</a></li>";
                echo "<li class=''><a data-toggle='modal' data-target='#ModalNotif'>Notifikasi <span class='label-primary'>".$this->session->userdata('notif_ban')."</span></a></li>";
                echo "<li class=''><a href='". base_url('index.php/Login/logout') ."'>Keluar</a></li>";
            }else{
                echo "<li class='active'><a href='". base_url('index.php/Home/') . "'>Beranda</a></li>";
                echo "<li class=''><a href='" . base_url("index.php/Perusahaan/") . "'>Cari Perusahaan Manufaktur</a></li>";
                echo "<li class=''><a href='" . base_url('index.php/Bahan_baku/') . "'>Cari Perusahaan Bahan Baku</a></li> ";
                echo "<li class=''><a href='". base_url('Login/logout') ."'>Logout</a></li>";
            }
        ?>

      </ul>
    </div>
  </div>
</nav>

<!--   <?php
//        echo "<pre>";
//        print_r($_SESSION);
//        echo "</pre>";

  ?> -->

<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <?php
     if($this->session->userdata('status') != "login"){
         echo "<a href='". base_url('Home/') . "'>Beranda</a>";
         echo "<a href='" . base_url("Perusahaan/") . "'>Cari Perusahaan Manufaktur</a>";
         echo "<a href='" . base_url('Bahan_baku/') . "'>Cari Perusahaan Bahan Baku</a>";
         echo "<a href='". base_url('Login/') ."'>Login</a>";
     }elseif ($this->session->userdata('tipe_user') == 'manufaktur' && $this->session->userdata('status') == "login") {
         echo " <a href='". base_url('Home/') . "'>Beranda</a></li>";
         echo "<a href='" . base_url('Bahan_baku/') . "'>Cari Perusahaan Bahan Baku</a></li>";
         echo "<a href='". base_url('Login/logout') ."'>Logout</a></li>";
     }elseif ($this->session->userdata('tipe_user') == 'bahan baku' && $this->session->userdata('status') == "login") {
         echo "<a href='". base_url('Home/') . "'>Beranda</a></li>";
         echo "<a href='" . base_url('Perusahaan/') . "'>Cari Perusahaan Manufaktur</a></li>";
         echo "<a href='". base_url('Login/logout') ."'>Logout</a></li>";
     }else{
         echo "<a href='". base_url('Home/') . "'>Beranda</a>";
         echo "<a href='" . base_url("Perusahaan/") . "'>Cari Perusahaan Manufaktur</a>";
         echo "<a href='" . base_url('Bahan_baku/') . "'>Cari Perusahaan Bahan Baku</a>";
         echo "<a href='". base_url('Login/logout') ."'>Logout</a>";
     }
 ?>
</div>

<div class="modal fade" id="ModalNotif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top:50%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notifikasi Anda</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12">
            <?php if($_SESSION['tipe_user'] == 'Manufaktur'){?>
            	<?php foreach ($_SESSION['isinotif'] as $data) { ?>
            		<p>Penyedia bahan baku <a href="<?php echo base_url('bahan_baku/showmore_detail/').$data['id_bahan_baku']?>" ><?php echo $data['nama']?></a> ingin mengajak anda untuk bekerja sama.</p>
            		<a href="<?php echo base_url('kerjasama/terima_bahanbaku/'.$data['id_bahan_baku'])?>"><button class="btn btn-primary">Setuju</button></a>
            		<a href="<?php echo base_url('kerjasama/tolak_bahanbaku/'.$data['id_bahan_baku'])?>"><button class="btn btn-warning">Tidak Setuju</button></a>
            	<?php } ?>
            <?php }?>


            <?php if($_SESSION['tipe_user'] == 'Bahan Baku'){?>
            	<?php foreach ($_SESSION['isinotif'] as $data) { ?>
            		<p>Perusahaan manufaktur <a href="<?php echo base_url('perusahaan/detail/').$data['id_manufaktur']?>" ><?php echo $data['nama']?></a> ingin mengajak anda untuk bekerja sama.</p>
            		<a href="<?php echo base_url('kerjasama/terima_manufaktur/'.$data['id_manufaktur'])?>"><button class="btn btn-primary">Setuju</button></a>
            		<a href="<?php echo base_url('kerjasama/tolak_manufaktur/'.$data['id_manufaktur'])?>"><button class="btn btn-warning">Tidak Setuju</button></a>
            	<?php } ?>
            <?php }?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
