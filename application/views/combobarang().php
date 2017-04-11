
        <script type="text/javascript">
          function combobarang(){
            //tabel barang_bahan
            var kategori = <?php echo json_encode($kategoribar); ?>;
            var barang   = <?php echo json_encode($barangbar); ?>;

            var combokat = document.getElementById('kategori').value; //ngambil nilai combo kategori
            var combobar = document.getElementById('barang');
            var xi =0;
            xi = document.getElementById('barang').length - 1;
            for ( var x = xi; x >= 0; x--) {
              document.getElementById("barang").remove(i);
            } 

            for(var i = 0; i <= barang.length; i++){
              if(kategori[i] == combokat) {
                var option   = document.createElement("option");
                option.text  = barang[i];
                option.value = barang[i];
                try{
                  combobar.add(option, null);
                }catch(error){
                  combobar.add(option);
                }
              }
            }
          }
        </script>
