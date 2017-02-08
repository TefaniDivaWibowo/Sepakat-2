<div class="main-banner">
    <div class="container">
        <h1 class="banner-text">Jadikan usaha anda hebat sekarang juga. Cari penyedia bahan baku untuk memenuhi permintaan klien anda atau cari orang yang membutuhkan bahan baku dari anda.</h1>
        <br>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <center><input type="text" class="form-control" placeholder="Cari ..." style="border-radius:50px;"></center>
            </div>
        </div>
        <br>
        <div class="row">
           <div class="col-xs-4 col-xs-offset-4">
               <center><button class="btn btn-utama">CARI</button></center>
           </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding:0;">
    <h1 class="text-center">Bagaimana Sepakat Bekerja?</h1><hr><br>
    <div class="col-md-4 how-to" style="background-image:url('<?php echo base_url("assets/images/howto/search.jpg"); ?>');">
        <div class="text-center howtotext">
            <h3>Cari Partner Kerja</h3>
        </div>
    </div>
    <div class="col-md-4 how-to" style="background-image:url('<?php echo base_url("assets/images/howto/communicate.jpg"); ?>');">
        <div class="text-center howtotext">
            <h3>Komunikasikan Kerjasama</h3>
        </div>
    </div>
    <div class="col-md-4 how-to" style="background-image:url('<?php echo base_url("assets/images/howto/handshake.jpg"); ?>');">
        <div class="text-center howtotext">
            <h3>Sepakati Kontrak Kerja Bersama</h3>
        </div>
    </div>
</div>

<div class="container-fluid section1">
    <div class="container">
        <div class="row section1-header">
            <span>Kategori</span>
            <h2 style="font-weight:600;">Produk Bahan Baku Populer</h2>
            <hr>
            <p>Berikut adalah 6 kategori teraktif di website ini.</p>
        </div>
            <div class="col-md-4 category-box">
                <i class="fa fa-3x fa-bank"></i>
                <h3>Teknologi</h3>
                <hr/>
            </div>
            <div class="col-md-3 category-box">
                <i class="fa fa-3x fa-automobile"></i>
                <h3>Otomotif</h3>
                <hr/>
            </div>
            <div class="col-md-4 category-box">
                <i class="fa fa-3x fa-book"></i>
                <h3>Kerajinan</h3>
                <hr/>
            </div>
            <div class="col-md-3 category-box">
                <i class="fa fa-3x fa-cubes"></i>
                <h3>Material</h3>
                <hr/>
            </div>
            <div class="col-md-3 category-box">
                <i class="fa fa-3x fa-diamond"></i>
                <h3>Logam</h3>
                <hr/>
            </div>
            <div class="col-md-5 category-box">
                <i class="fa fa-3x fa-flask"></i>
                <h3>Bahan Kimia</h3>
                <hr/>
            </div>
        <br>
        <center>

        <form action="" method="post">
            <button class="btn btn-utama" type="submit" name="submitKat">Telusuri Semua Kategori</button>
        </form>

            <?php
            if (isset($_POST['submitKat'])) {
                if ($this->session->userdata('status') == "login") {
                    redirect('tes/masuk/');
                } else {
                    redirect('tes/belum_masuk');
                }
            }
            ?>
        </center>
    </div>
</div>
