<div class="main-banner">
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Cari Perusahaan</h1>
    <h4>Gunakan halaman berikut untuk mencari perusahaan yang sesuai minat anda.</h4>
  </div>
  <div class="container filter-box">
    <h2 style="color:#0f0f0f;margin-top:0;">Filter</h2>
    <hr />
    <form action="<?php echo base_url(); ?>Perusahaan/tombol" method="post">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Kata kunci" />
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Lokasi" />
      </div>
      <div class="col-md-4">
        <select class="form-control">
          <option value="">Kategori</option>
        </select>
      </div>
      <br><br>
    </div>
    <div class="row">
      <div class="col-md-4 text-left" style="line-height:2;">
        <h3 style="color:grey;">Tipe Perusahaan</h3>
        <div class="checkbox">
          <label><input name="tipes[]" type="checkbox" value="Perusahaan Besar" />Perusahaan Besar</label><br>
          <label><input name="tipes[]" type="checkbox" value="Perusahaan Sedang" />Perusahaan Sedang</label><br>
          <label><input name="tipes[]" type="checkbox" value="Perusahaan Kecil" />Perusahaan Kecil</label><br>
          <label><input name="tipes[]" type="checkbox" value="Home Industri" />Home Industri</label><br>
        </div>
      </div>
      <div class="col-md-4 text-left" style="line-height:2;">
        <h3 style="color:grey;">Kebutuhan Perusahaan</h3>
        <div class="checkbox">
           <label><input name="banyak[]" type="checkbox" value="3000" />Lebih dari 3 ton / bulan</label><br>
          <label><input name="banyak[]" type="checkbox" value="1000">1 - 3 ton / bulan</label><br>
          <label><input name="banyak[]" type="checkbox" value="500" />0,5 - 1 ton / bulan</label><br>
          <label><input name="banyak[]" type="checkbox" value="499" />Kurang dari 0,5 ton / bulan</label><br>
        </div>
      </div>
      <div class="col-md-4 text-left" style="line-height:2;">
        <h3 style="color:grey;">Waktu</h3>
        <div class="checkbox">
          <label><input type="radio" name="rad[]" value="terbaru"/>Terbaru</label><br>
          <label><input type="radio" name="rad[]" value="terlama"/>Terlama</label><br>
        </div>
      </div>
    </div>
    <div class="row" style="background-color:rgb(240, 240, 240);margin-top:40px;">
      <div class="col-md-3 col-md-offset-9">
        <br><button class="btn btn-primary">Terapkan Filter</button><br><br>
      </div>
    </div>
    </form>
  </div>
</div></div>

<br>
<br>

<br>
<div class="container-fluid section1" style="padding-top:80px;">
  <div class="container">
    <!--<h3>Ditemukan 217 data, menampilkan 1-5</h3>-->

    <?php
        foreach ($query as $a) {
          $id       = $a['id_manufaktur'];
          $gambar   = $a['icon'];
    ?>

    <a href="<?php echo base_url('perusahaan/detail/'.$a['id_manufaktur']);?>"><div class="col-xs-12 company-item">
      <div class="row company-itemhead">
        <div class="col-md-1">
          <img src="<?php echo base_url($gambar); ?>" class="img-responsive"/>
        </div>
        <div class="col-md-9">
          <h2 style="margin-top:0;font-weight: 200;"><?php echo $a['nama'];?></h2>
          <span class="label-primary">Membutuhkan: <?php echo $a['barang_dibutuhkan'];?></span>
        </div>
        <!--<div class="col-md-2 text-center">
          <span>2 jam yang lalu</span>
        </div>-->
      </div>
      <div class="row company-itembody">
        <div class="col-md-12" align="justify">
          <?php
            echo $a['deskripsi'];
          ?>
        </div>
      </div>
      <div class="row company-itemfoot">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"></i> <?php echo $a['provinsi'];?>, <?php echo $a['kota'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> <?php echo $a['banyak_kebutuhan'];?> Kilogram / bulan</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i> <?php echo $a['tipe'];?></span>
        </div>
      </div>
    </div></a>
    <?php } ?>

  </div>
  <nav aria-label="Page navigation" class="text-center">
    <!--<ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>-->
  </nav>
</div>
