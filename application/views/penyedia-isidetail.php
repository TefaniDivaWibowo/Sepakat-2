<?php

  $id_user  = $this->session->userdata('id_user');
  $email    = $this->session->userdata('username');

  $conn     = mysqli_connect("localhost","root","","db_sepakat");
  $bah_bak  = mysqli_query($conn, "SELECT * FROM `bahan_baku` WHERE `email` = '$email'");
  while($bb = mysqli_fetch_assoc($bah_bak)){
    $id     = $bb['id_bahan_baku'];
  }
?>

<div class="solid-banner" >
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Ceritakan Usaha Penyedia Anda</h1>
    <p>Sesuaikan profil untuk dilihat oleh penyedia dan perusahaan lain.</p>
  </div>
</div>

<form action="<?= base_url('penyedia/desk');?>" method="post">

<input type="hidden" name="id_user" value="<?= $id_user;?>"/>
<input type="hidden" name="id_bab" value="<?= $id;?>"/>

<div class="container-fluid" style="background-color:white;margin-top:60px;">
  <div class="container">
    <center>
      <span>Tentang</span>
      <h2>Deskripsi Usaha Penyedia</h2>
      <hr />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </center>
    <div id="summernote" name="deskripsi"></div>
  </div>
</div>

<div class="container-fluid" style="background-color:#fcfcfc;margin-top:60px;">
  <div class="container">
    <center>
      <h2>Simpan Keterangan Usaha Penyedia Anda</h2>
      <hr />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <input type="submit" name="submit" class="btn btn-primary" value="Simpan Data Diri"/>
    </center>
  </div>
</div>
</form>
