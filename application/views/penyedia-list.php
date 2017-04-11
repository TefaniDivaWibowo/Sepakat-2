<br>
<br>
<div class="main-banner">
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Daftar Penyedia Bahan Baku</h1>
    <h4>Kategori </h4>
  </div>
  <div class="container filter-box">
    <h2 style="color:#0f0f0f;margin-top:0;">Filter</h2>
    <hr />
    <form action="<?php echo base_url(); ?>Bahan_baku/tombol" method="post">
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
        <h3 style="color:grey;">Produksi per bulan</h3>
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

<span>&nbsp;</span>
<span>&nbsp;</span>
<span>&nbsp;</span>
<div class="container-fluid section1" style="padding-top:80px;">
  <div class="container">
    <?php
        foreach ($query as $a) {
          $id       = $a['id_bahan_baku'];
          $gambar   = $a['icon'];
    ?>

  <a href="<?= base_url('bahan_baku/showmore_detail/'.$id);?>">
    <div class="col-xs-12 company-item">
        <div class="row company-itemhead">
          <div class="col-md-1">
            <img src="<?php echo base_url($gambar); ?>" class="img-responsive"/>
          </div>
          <div class="col-md-9">
            <h2 style="margin-top:0;font-weight: 200;"> <?php echo $a['nama'];?> <!-- PT. Extra Steel Indonesia --></h2>
            <span class="label-primary"> Menghasilkan: <?php echo $a['barang_bahan'];?> </span>
          </div>
          <div class="col-md-2 text-center">
            <span>2 jam yang lalu</span>
          </div>
      </div>
      <div class="row company-itembody">
        <div class="col-md-12" align="justify">
          <?= $a['deskripsi'];?>
        </div>
      </div>
      <div class="row company-itemfoot">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"> </i><?= $a['provinsi'];?>, <?= $a['kota'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> <?= $a['total_produksi']?> Kg</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i></span>
        </div>
      </div>
    </div>

  </a>
   <?php  } ?>
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
