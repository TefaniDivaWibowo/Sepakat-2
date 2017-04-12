<div class="solid-banner" style="background-image: url('<?php if($perusahaan[0]['gambar_latar'] != null) echo base_url($perusahaan[0]['gambar_latar']); ?>');">
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Lengkapi Data Perusahaan Anda</h1>
    <!--<p>Sesuaikan data diri  untuk perusahaan Anda yang akan dilihat orang lain.</p>-->
  </div>

    <div class="container filter-box" style="text-align:left;font-size:120%;line-height:2;">
      <div class="row company-itemhead">
        <div class="col-md-2">
          <div class="input-group">
              <?php
                if ($perusahaan[0]['icon'] != NULL) {
              ?>
                <img src="<?php echo base_url($perusahaan[0]['icon']); ?>" class="img-responsive"/>
              <?php
                }
              ?>
          </div>
        </div>


        <form method="POST" action="<?php echo base_url();?>Perusahaan/update/<?php echo $perusahaan[0]['id_user'];?>" enctype="multipart/form-data">

        <div class="col-md-10">
          <div class="input-group input-data  ">
            <input type="hidden" class="form-control" name="idus" <?php echo 'value = "' . $perusahaan[0]['id_user'] . '"';?>/>
          </div>
          <div class="input-group input-data">
            <input type="text" class="form-control" name="nama" placeholder="Nama Perusahaan" <?php echo 'value = "' . $perusahaan[0]['nama'] . '"';?> />
          </div>
          <div class="input-group input-data">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat Perusahaan" <?php echo 'value = "' . $perusahaan[0]['alamat'] . '"';?> />
          </div>
          <div class="input-group input-data">
            <select class="form-control" name="provinsi" onchange="combokota()" id="provinsi">
              <?php
                if($perusahaan[0]['provinsi'] != NULL){
                  echo "<option value=" . $perusahaan[0]['provinsi'] . "> ". $perusahaan[0]['provinsi'] . "</option>";
                } else {
                  echo "<option value=''>Provinsi</option>";
                }
                  foreach($provinsi as $data){
                    echo "<option value=" . $data['provinsi'] . "> ". $data['provinsi'] . "</option>"; }
               ?>
            </select>
          </div>
          <div class="input-group input-data">
            <select id="kota" class="form-control" name="kota" style="color:#bdc3c7;" >
              <?php
                if($perusahaan[0]['kota'] != NULL){
                  echo "<option value=" . $perusahaan[0]['kota'] . "> ". $perusahaan[0]['kota'] . "</option>";
                } else {
                  echo "<option value=''>Kota</option>";
                }
              ?>
            </select>
          </div>
          <div class="input-group input-data">
            <input type="text" class="form-control" name="notelp" placeholder="Nomor Telepon" <?php echo 'value = "' . $perusahaan[0]['no_telp'] . '"';?>/>
          </div>
          <div class="input-group input-data">
            <input type="text" class="form-control" name="email" <?php echo 'value = "' . $perusahaan[0]['email'] . '"';?> placeholder="Email"/>
          </div>
          <div class="input-group input-data">
            <select name="tipe" class="form-control">
              <?php
                if($perusahaan[0]['tipe'] != NULL){
                  echo "<option value=" . $perusahaan[0]['tipe'] . "> ". $perusahaan[0]['tipe'] . "</option>";
                } else {
                  echo "<option value=''>Tipe Perusahaan</option>";
                }
              ?>
              <option value="Perusahaan Besar">Perusahaan Besar</option>
              <option value="Perusahaan Sedang">Perusahaan Sedang</option>
              <option value="Perusahaan Kecil">Perusahaan Kecil</option>
            </select>
          </div>
          <!--<div class="input-group input-data">
            <select class="form-control" name="kategori" onchange="combobarang()" id="kategori">
                <option value="">Kategori</option>
                    /*require_once 'koneksi_pdo.php';
                    $select = $koneksi->query("SELECT * FROM `kategori`");
                    while ($data = $select->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='".$data['id_kategori']."'>{$data['kategori']}</option>";
                    }*/
            </select>
          </div>
          <div class="input-group input-data">
            <select id="barang" class="form-control" style="color:#bdc3c7;" value="//$barbar;" name="barang">
              <option >Barang/bahan</option>
            </select>
          </div>-->
          <div class="input-group input-data">
            <input name="butuh" type="text" class="form-control" placeholder="Barang yang Dibutuhkan" <?php echo 'value = "' . $perusahaan[0]['barang_dibutuhkan'] . '"';?>/>
          </div>
          <div class="input-group input-data">
            <input name="banyak" type="text" class="form-control" placeholder="Banyak Kebutuhan (Satuan Kg)" <?php echo 'value = "' . $perusahaan[0]['banyak_kebutuhan'] . '"';?>/>
          </div>
          <br>
        </div>

        <br>
        <center>
          <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload"/>
          <br>
          <input type="submit" name="submit" class="btn btn-primary" value="Simpan Data"/>
        </center>

      </form>
    </div>
  </div>

<div class="container-fluid" style="background-color:#fcfcfc;margin-top:60px;">
  <div class="container">
    <center>
      <h2>Hiasi laman perusahaan Anda</h2>
      <hr />
      <h4>Pilih Gambar Sampul</h4>
      <form method="post" enctype="multipart/form-data" action="<?= base_url('perusahaan/up_gamlat');?>">
        <input type="file" class="btn btn-primary" name="fileLatar" id="fileLatar" />
        <input type="hidden" <?php echo 'value = "' . $perusahaan[0]['id_user'] . '"';?> name="id_user"/>
        <br>
        <input type="submit" name="gambar" class="btn btn-primary" value="Jadikan Gambar Sampul"/>
      </form>
    </center>
  </div>
</div>

<script>
  function combobarang()
  {
    var combo_kategori = $('#kategori').val();
    //console.log(combo_kategori);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Perusahaan/getComboBahan/') ?>"+combo_kategori,
      data : '',
      success: function(data){
        $('#barang').find('option').remove();
        $('#barang').append(data);
      }
    });
  }

  function combokota()
  {
    var combo_provinsi = $('#provinsi').val();
    console.log(combo_provinsi);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Perusahaan/getComboKota/') ?>"+combo_provinsi,
      data : '',
      success: function(data){
        $('#kota').find('option').remove();
        $('#kota').append(data);
      }
    });
  }
</script>
