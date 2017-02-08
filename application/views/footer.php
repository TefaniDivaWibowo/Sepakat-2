<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/summernote.min.js"); ?>"></script>

<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    })
    $(document).scroll(function(){
      if($(document).scrollTop() > 50){
        $('#navigate').css('background-color', 'rgba(255, 255, 255, 1.0)');
        $('#navigate').css('color', '#000000');
        $('#navigate').css('font-weight', '600');
        $('#navigate').css('box-shadow', '1px 2px 2px 1px rgba(0,0,0,0.15)');
      }else{
        $('#navigate').css('background-color', 'rgba(0,0,0,0)');
        $('#navigate').css('color', '#f0f0f0');
        $('#navigate').css('font-weight', '200');
        $('#navigate').css('box-shadow', 'none');
      }
    })
    $('#summernote').summernote({
      height:200,
      minHeight: null,
      maxHeight: null,
      focus: true
    });
  });
</script>

<footer class="footer-distributed" style="position:relative; bottom:0;">
   <div class="row">
    <div class="footer-left">
       <div class="col-xs-8">
         <h2 style="color:#f0f0f0">Kontak kami sekarang</h2>
          <p style="color:#f0f0f0">E-mail</p>
           <input class="form-control" type="text"><br>
           <p style="color:#f0f0f0">Pesan</p>
           <textarea class="form-control" style="height:100px;"></textarea><br>
           <button class="btn btn-utama">Kirim</button>
       </div>
    </div>
    <div class="footer-center">
       <h2 style="color:#f0f0f0">Temukan kami di</h2>
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Jl. Danau Ranau</span> Malang, Indonesia</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+1 555 123456</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:contact@sepakat.com">contact@sepakat.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <h2 style="color:#f0f0f0">Tentang Sepakat</h2>
        <p class="footer-company-about">
            Sepakat adalah sebuah media penghubung antara orang-orang yang memiliki bahan baku dengan mereka yang membutuhkan bahan baku tersebut untuk menjalankan usaha mereka. Dengan saling terhubungnya mereka, maka akan lebih mudah dalam mengatur kebutuhan barang untuk modal produksi dan semakin mempercepat pertumbuhan ekonomi.
        </p>
        <div class="footer-icons">
            <i class="fa fa-globe"></i>
        </div>
    </div>
    </div>

</footer>
<footer class="footer-distributed" style="background-color:#1a1c1d; position:relative; bottom:0;margin-top:0;color:#f0f0f0;padding:20px 25px;">
    <div class="row" style="background-color:#1a1c1d">
        <center><p class="footer-company-name">Sepakat &copy; 2017</p></center>
    </div>
</footer>

</body>
