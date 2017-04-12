<div class="main-banner">
    <div class="container">
        <h1 class="banner-text">Jadikan usaha anda hebat sekarang juga. Cari penyedia bahan baku untuk memenuhi permintaan klien anda atau cari orang yang membutuhkan bahan baku dari anda.</h1>
        <br>
        <!--<div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <center><input type="text" class="form-control" placeholder="Cari ..." style="border-radius:50px;"></center>
            </div>
        </div>
        <br>
        <div class="row">
           <div class="col-xs-4 col-xs-offset-4">
               <center><button class="btn btn-utama">CARI</button></center>
           </div>
        </div>-->
    </div>
</div>

<div class="container-fluid section1" id="PerusahaanMan">
    <div class="container">
        <div class="row section1-header">
            <!--<span>Terbaru</span>-->
            <span>&nbsp;</span>
            <h2 style="font-weight:600;">Perusahaan</h2>
            <hr>
            <!--<p>Berikut adalah 5 perusahaan yang paling baru mendaftar di website ini.</p>-->
        </div>

      <?php
       foreach ($query as $a) {
           $id    = $a['id_manufaktur'];
           $icon  = $a['icon'];

      ?>
      <a href="<?= base_url('perusahaan/detail/'.$id)?>">
        <div class="col-xs-12 latest-post">
          <div class="col-xs-1" style="padding:5px;">
            <img src="<?php echo base_url($icon); ?>" class="img-responsive"/>
          </div>
          <div class="col-xs-6">
            <div class="company-name pull-left">
                <h3><?= $a['nama']?></h3>
                <h5>- Membutuhkan <?= $a['barang_dibutuhkan'];?></h5>
            </div>
          </div>
          <div class="col-xs-5">
            <div class="company-desc pull-right">
                <span><i class="fa fa-fw fa-map-marker"></i><?= $a['kota'] .", ". $a['provinsi'];?></span><br>
                <!--<span class="label label-primary">Butuh Cepat</span>-->
            </div>
          </div>
        </div>
      </a>
      <?php
        }
      ?>

        </div>
        <br>
        <center>
          <a href="<?= base_url('index.php/Perusahaan/')?>"><button class="btn btn-utama">Telusuri semua Perusahaan</button></a>
        </center>
    </div>
</div>

<div class="container-fluid" style="padding:0;">
    <h1 class="text-center">Bagaimana Sepakat Bekerja?</h1><hr><br>
    <div class="col-md-4 how-to" style="min-height:500px; background-image:url('<?php echo base_url("assets/images/howto/search.jpg"); ?>');">
        <div class="text-center howtotext">
            <h3>Cari Partner Kerja</h3>
        </div>
    </div>
    <div class="col-md-4 how-to" style="min-height:500px;background-image:url('<?php echo base_url("assets/images/howto/communicate.jpg"); ?>');">
        <div class="text-center howtotext">
            <h3>Komunikasikan Kerjasama</h3>
        </div>
    </div>
    <div class="col-md-4 how-to" style="min-height:500px;background-image:url('<?php echo base_url("assets/images/howto/handshake.jpg"); ?>');">
        <div class="text-center howtotext">
            <h3>Sepakati Kontrak Kerja Bersama</h3>
        </div>
    </div>
</div>

<div class="container-fluid section1" id="PerusahaanBan">
    <div class="container">
        <div class="row section1-header">
            <span>&nbsp;</span>
            <h2 style="font-weight:600;">Kategori Perusahaan Bahan Baku</h2>
            <hr>
            <!--<p>Berikut adalah 6 kategori teraktif di website ini.</p>-->
        </div>
          <?php
            foreach($kueri as $u){
              $id = $u['id_kategori'];
          ?>
          <a href="<?= base_url('index.php/bahan_baku/show_detail/'.$id);?>">
            <div class="<?php echo $u['kotak']; ?>">
                <i class="<?php echo $u['icon']; ?>"></i>
                <h3><?php echo $u['kategori']; ?></h3>
                <hr/>
            </div>
          </a>
          <?php
            }
          ?>
        <br>
        <center>
          <a href="<?= base_url('Penyedia/list_kategori/')?>"><button class="btn btn-utama">Telusuri semua Kategori</button></a>
        </center>
    </div>
</div>
