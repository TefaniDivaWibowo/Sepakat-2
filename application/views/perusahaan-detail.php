<?php
  $id_user    = $this->session->userdata('id_user');

  /*foreach ($query as $a) {
    $id       = $a['id_manufaktur'];
    $nama     = $a['nama'];
    $alamat   = $a['alamat'];
    $email    = $a['email'];
    $kota     = $a['kota'];
    $provinsi = $a['provinsi'];
    $no       = $a['no_telp'];
    $tipe     = $a['tipe'];
    $barbut   = $a['barang_dibutuhkan'];
    $totbut   = $a['banyak_kebutuhan'];
    $icon     = $a['icon'];
    $gambar   = $a['gambar_latar'];
    $idus     = $a['id_user'];
    $deks     = $a['deskripsi'];
  }*/

  foreach ($kueri as $b){
    $id_bahan   = $b['id_bahan_baku'];
  }

  $conn     = mysqli_connect("localhost","root","","dbsepakatbaru");

  /*$id_b     = mysqli_query($conn, "SELECT * FROM `bahan_baku` WHERE `id_user` = '$id_user'");
  while($zz = mysqli_fetch_assoc($id_b)) {
    $id_bahan  = $zz['id_bahan_baku'];
  }*/

?>

<span>&nbsp;</span>

<div class="sub-banner" >
  <div class="container" style="padding-top:10%;color:white;">
  </div>
  <div class="container filter-box" style="text-align:left;font-size:120%;line-height:2;">
    <div class="row company-itemhead">
      <div class="col-md-1">
        <img src="<?php echo base_url($query[0]['icon']); ?>" class="img-responsive"/>
      </div>
      <div class="col-md-9">
        <h2 style="margin-top:0;font-weight: 200;"><?= $query[0]['nama'];?></h2>
        <span style="color:#b0b0b0;"></span>  <span class="label-primary">Membutuhkan: <?= $query[0]['barang_dibutuhkan'];?></span>
      </div>
      <!--<div class="col-md-2 text-center">
        <span>2 jam yang lalu</span>
      </div>-->
    </div>
    <div class="row company-itembody">
      <div class="col-md-12">
        <?= $query[0]['deskripsi'];?>
      </div>
    </div>
    <div class="row company-itemfoot" style="background-color:white;font-size:80%;">
      <div class="text-left">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"></i> <?= $query[0]['provinsi'];?>, <?= $query[0]['kota'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> <?= $query[0]['banyak_kebutuhan'];?> Kg/Bulan</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i>&nbsp;</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-envelope"></i> <?= $query[0]['email'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-phone"></i> <?= $query[0]['no_telp'];?></span>
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

      <form action="<?= base_url('index.php/perusahaan/kerjasama');?>" method="POST" >

         <?php
          if($id_user == NULL){
        ?>
            <input type="hidden" name="idm" value="">
            <input type="hidden" name="idb" value="">

            <div class="col-md-4 pull-right"><br>
              <a href="<?= base_url('index.php/login/')?>"><span class='btn btn-primary'>Login untuk Bekerja Sama</span></a>
            </div>

        <?php
          } else {

            $idm  = $query[0]['id_manufaktur'];
        ?>

        <input type="hidden" name="idm" value="<?= $idm;?>">
        <input type="hidden" name="idb" value="<?= $id_bahan;?>">

        <div class="col-md-4 pull-right"><br>
          <?php
            $kerjasama  = mysqli_query($conn, "SELECT * FROM `kerjasama` WHERE `id_manufaktur` = '$idm' && `id_bahan_baku` = '$id_bahan'");
            $cc = mysqli_num_rows($kerjasama);

            /*echo $id_manufaktur;
            echo $id;
            echo $cc;*/

            if ($cc == 1) {
              while($dd = mysqli_fetch_assoc($kerjasama)) {
                $kon = $dd['konfirmasi'];
                  if ($kon == 1) {
                    echo "<span class='btn btn-primary'>Kirim Pesan</span>";
                  } elseif ($kon == 0) {
                    echo "<span class='btn btn-primary'>Menunggu konfirmasi</span>";
                  }
              }
            } else {
              echo "<input type='submit' class='btn btn-primary' name='submit' value='Jadikan Rekan Kerja Sama'>";
            }
          }
          ?>
        </div>
      </form>
    </div>
</div>

<div class="container-fluid" style="background-color:white;margin-top:60px;">
  <div class="container" style="text-align:justify;">

  </div>
</div>
