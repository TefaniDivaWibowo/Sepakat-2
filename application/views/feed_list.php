
<?php
  $idus = $this->session->userdata('id_user');
?>

<body style="background-color:#f0f0f0">

<div class="group container-full" style="height:40%;background-image:url(media/banner.png);background-size:cover;background-position:center;">
  <div class="container" style="padding-top:7%;">
    <center><h1 style="font-family:'abel';color:white;font-size:350%;margin-bottom: 0px;text-shadow:2px 2px 4px rgba(0,0,0,0.45);">Find Your Inspirative Story</h1>
    <span class="banner-subtext" style="text-shadow:2px 2px 4px rgba(0,0,0,0.45);">And be ready to create and share your own.</span></center>
  </div>
  <!-- <div class="container banner-content-down"> -->
</div>

<div class="container-full" style="box-shadow:1px 2px 20px 2px rgba(0,0,0,0.15);background-color:#22202B;">
  <nav id="navigate" class="" style="width:100px;">
    <div class="container pad" style="padding:0;">
      <div class="content-right">

      </div>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <button class="btn btn-incard" style="margin-top:13px; margin-bottom:13px;"><i class="fa fa-eye"></i></button>
    </div>
    
  </nav>
</div>

<div class="container-fluid" style="background-color:white;margin-top:60px;">
  <div class="container"> 
    <form enctype="multipart/form-data" action="<?= base_url('index.php/feed/add_perusahaan_feed')?>" method="POST" >
      <center>
        <h2>Feed yang pernah Anda buat</h2>
      </center>
    </form>
  </div>
</div>

<?php
  if ($query[0][''] = 0) {
    echo "<center>
            <h2>Feed yang pernah Anda buat</h2>
          </center>";
  } else {
?>

  <div class="container filter-box" style="text-align:left; font-size:120%; line-height:2;">
    <div class="row company-itemhead">
      <div class="col-md-1">
        <img src="<?= base_url($query[0]['gambar'])?>" class="img-responsive"/>
      </div>
      <div class="col-md-9">
        <span align="justify" style="color:#b0b0b0;"><?= $query[0]['isi']?></span>
      </div>
      <div class="col-md-2 text-center">
        <span><?= $query[0]['tanggal']?></span>
      </div>
    </div>

<?php
  }
?>
  
    <!--<div class="row company-itembody">
      <div class="col-md-12" align="justify">
        
      </div>
    </div>-->
  
    <div class="row company-action">
      <div class="col-md-8 pull-left">
        <h4 style="margin-top:20px;">Bagikan di
          <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>
          <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>
          <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span>
          <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span>
        </h4>
      </div>
      
      <input type="hidden" name="idm" value="">
         <input type="hidden" name="idb" value="">

     
    </div>
  </div>
</body>
  <span>&nbsp;</span>
  <span>&nbsp;</span>

