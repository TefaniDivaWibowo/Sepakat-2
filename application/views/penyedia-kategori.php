
<div class="main-banner">
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Cari Penyedia</h1>
    <h4>Gunakan halaman berikut untuk mencari penyedia kebutuhan industri Anda</h4>
  </div>
    <div class="container filter-box" style="text-align:left;font-size:120%;line-height:2;">
      <div class="row section1-header">
            <h2 style="font-weight:600;">Kategori Penyedia Bahan Baku</h2>
        </div>
          <?php 
            foreach($kategori as $u){
              $id = $u['id_kategori'];
          ?>
          <a href="<?= base_url('bahan_baku/show_detail/'.$id);?>">
            <div class="<?php echo $u['kotak']; ?>">
                <i class="<?php echo $u['icon']; ?>"></i>
                <h3><?php echo $u['kategori']; ?></h3>
                <hr/>
            </div>
          </a>
          <?php
            }
          ?>
        <center>
      </center>
      <br>
</div>
</div>

<div class="container-fluid section1" style="padding-top:80px;">

<!-- <div class="container-fluid section1">
    <div class="container">
        <div class="row section1-header">
            <h2 style="font-weight:600;">Kategori Penyedia Bahan Baku</h2>
        </div>
          <?php 
            foreach($kategori as $u){
              $id = $u['id_kategori'];
          ?>
          <a href="<?= base_url('bahan_baku/show_detail/'.$id);?>">
            <div class="<?php echo $u['kotak']; ?>">
                <i class="<?php echo $u['icon']; ?>"></i>
                <h3><?php echo $u['kategori']; ?></h3>
                <hr/>
            </div>
          </a>
          <?php
            }
          ?>
        <center>
      </center>
    </div>
</div> -->



  <nav aria-label="Page navigation" class="text-center">
    <ul class="pagination">
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
    </ul>
  </nav>
</div>
