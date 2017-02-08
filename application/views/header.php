<head>
    <title>Sepakat</title>

<link rel="shortcut icon" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/style-extra.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>"/>
<link rel="stylesheet" href="<?php echo base_url("assets/css/summernote.css"); ?>"/>

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
      <a class="navbar-brand" href="#"><i class="fa fa-fw fa-2x fa-handshake-o"></i></a>
    </div>
    <div class="pull-right">
      <a class="navbar-brand" onclick="openNav()"><i class="fa fa-fw fa-2x fa-free-code-camp"></i></a>
    </div>
    <div class="nav-menu navbar-collapse collapse">
      <ul class="nav" style="display:block;text-align:center;">

        <?php
            if($this->session->userdata('status') != "login"){
                echo "<li class='active'><a href='". base_url('Home/') . "'>Beranda</a></li>";
                echo "<li class=''><a href='" . base_url("Perusahaan/") . "'>Cari Perusahaan Manufaktur</a></li>";
                echo "<li class=''><a href='" . base_url('Bahan_baku/') . "'>Cari Perusahaan Bahan Baku</a></li> ";
                echo "<li class=''><a href='". base_url('Login/') ."'>Login</a></li>";
            }elseif ($this->session->userdata('tipe_user') == 'manufaktur' && $this->session->userdata('status') == "login") {
                echo "<li class='active'><a href='". base_url('Home/') . "'>Beranda</a></li>";
                echo "<li class=''><a href='" . base_url('Bahan_baku/') . "'>Cari Perusahaan Bahan Baku</a></li> ";
                echo "<li class=''><a href='". base_url('Login/logout') ."'>Logout</a></li>";
            }elseif ($this->session->userdata('tipe_user') == 'bahan baku' && $this->session->userdata('status') == "login") {
                echo "<li class='active'><a href='". base_url('Home/') . "'>Beranda</a></li>";
                echo "<li class=''><a href='" . base_url('Perusahaan/') . "'>Cari Perusahaan Manufaktur</a></li> ";
                echo "<li class=''><a href='". base_url('Login/logout') ."'>Logout</a></li>";
            } 
        ?>

      </ul>
    </div>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="<?php echo base_url();?>home">Beranda</a>
 <a href="<?php echo base_url();?>perusahaan">Cari Perusahaan</a>
 <a href="<?php echo base_url();?>penyedia">Cari Penyedia</a>
 <a>Login</a>
</div>
