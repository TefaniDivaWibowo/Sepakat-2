
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
          <a href="<?= base_url('index.php/feed/feed_detail/'.$this->session->userdata('id_user'))?>"><button class="btn btn-incard" style="margin-top:13px; margin-bottom:13px;"><i class="fa fa-eye"></i></button>
    </div>
    
  </nav>
</div>

<div class="container-fluid" style="background-color:white;margin-top:60px;">
  <div class="container"> 
    <form enctype="multipart/form-data" action="<?= base_url('index.php/feed/add_perusahaan_feed')?>" method="POST" >
      <center>
        <h2>Buat Feed Baru Mengenai Perusahaan Anda</h2>
        <hr />
        <input type="hidden" name="id_us" value="<?= $idus;?>">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.7/summernote.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.7/summernote.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

        <div id="summernote" class="form-control"></div>

        <textarea name="posting" style="display:none;" id="lawsContent" name="deskripsi" class="form-control"></textarea>
        <br>
        <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload"/>
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan Feed"/>
      </center>
    </form>
  </div>
</div>

<!--<div class="container filter-box" style="text-align:left; font-size:120%; line-height:2;">
    <div class="row company-itemhead">
      <div class="col-md-1">
        <img src="" class="img-responsive"/>
      </div>
      <div class="col-md-9">
        <h2 style="margin-top:0;font-weight: 200;">Halo</h2>
        <span style="color:#b0b0b0;">Halo</span>&nbsp;<span class="label-primary"> Menghasilkan: Hilu></span>
      </div>
      <div class="col-md-2 text-center">
        <span>2 jam yang lalu</span>
      </div>
    </div>
  
    <div class="row company-itembody">
      <div class="col-md-12" align="justify">
        Halo
      </div>
    </div>
  
    <div class="row company-itemfoot" style="background-color:white;font-size:80%;">
      <div class="text-left">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"></i> Hola, Halo</span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> halo Kg / Bulan</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i>&nbsp;</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-envelope"></i> Halo</span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-phone"></i> Halo</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-clock-o"></i> 08.00 - 17.00</span>
        </div>
      </div>
    </div>
  
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
          
            <div class="col-md-4 pull-right"><br>
               <span class='btn btn-primary'>Login untuk Bekerja Sama</span>
            </div>

     
    </div>
  </div>-->
</body>
  <span>&nbsp;</span>
  <span>&nbsp;</span>

