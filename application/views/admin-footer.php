<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/summernote.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/app.min.js"); ?>"></script>

<script type="text/javascript">

  $('#tblData').click(function(){
      $.ajax({
          'data'    : $('#addKateg').serialize(),
          'method'  : 'POST',
          'url'   : '<?= base_url('admin/tambah_kategori');?>',
          'success' : function(data){
              alert(data);
              $('#ModalAdd').modal('hide');
              location.reload();// for reload a page
          },
          'error' : function(err){
            console.log(err.ResponseText);
          }
      });

      return false;
  });

  var save_method;
  var table;

  function edit_kategori(id){
    save_method = 'update';
    $('#edKateg')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/kategori_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="idkat"]').val(data.id_kategori);
        $('[name="idkatdummy"]').val(data.id_kategori);
        $('[name="kategori"]').val(data.kategori);

        $('#ModalEd').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Kategori'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }

<<<<<<< HEAD

function edit_user(id){
    save_method = 'update';
    $('#edUser')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/user_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="iduser"]').val(data.id_user);
        $('[name="iduserf"]').val(data.id_user);
        $('[name="user"]').val(data.username);
        $('[name="password"]').val(data.password);

        $('#ModalEdit').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }

  function saveuser()
      {
        /*var url;
        if(save_method == 'add')
        {
            url = "<?php //echo base_url('admin/kategori_add/')?>"; 
        }
        else
        {
            url = "<?php //echo base_url('admin/kategori_update/')?>";
        }*/

         // ajax adding data to database
            $.ajax({
              'data'    : $('#edUser').serialize(),
              'method'  : 'POST',
              'url'     : '<?= base_url('admin/update_user/');?>',
              // dataType: "JSON",
              'success' : function(data){
                //if success close modal and reload ajax table
                $('#ModalEdit').modal('hide');
                location.reload();// for reload a page
              },
              'error'   : function (err){
                  alert('Error adding / update data');
              }
          });
      }

    function edit_bahan(id){
    save_method = 'update';
    $('#edBahan')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/bahan_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="idbahan"]').val(data.id_bahan_baku);
        $('[name="idbahanz"]').val(data.id_bahan_baku);
        $('[name="nama"]').val(data.nama);
        $('[name="alamat"]').val(data.alamat);
        $('[name="no"]').val(data.no_telp);
        $('[name="email"]').val(data.email);
        $('[name="total"]').val(data.total_produksi);
        $('[name="kategori"]').val(data.kategori);
        $('[name="hasil"]').val(data.barang_bahan);
        $('[name="provinsi"]').val(data.provinsi);
        $('[name="kota"]').val(data.kota);


        $('#ModalEdit1').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Bahan Baku'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }
function savebahan()
=======
  function save()
>>>>>>> 175c04ed14670d7c281e5a5c6010649ddec12ee4
      {
        /*var url;
        if(save_method == 'add')
        {
            url = "<?php //echo base_url('admin/kategori_add/')?>";
        }
        else
        {
            url = "<?php //echo base_url('admin/kategori_update/')?>";
        }*/

         // ajax adding data to database
            $.ajax({
              'data'    : $('#edKateg').serialize(),
              'method'  : 'POST',
              'url'     : '<?= base_url('admin/update_kategori/');?>',
              // dataType: "JSON",
              'success' : function(data){
                //if success close modal and reload ajax table
                $('#ModalEd').modal('hide');
                location.reload();// for reload a page
              },
              'error'   : function (err){
                  alert('Error adding / update data');
              }
          });
      }

      function delete_kategori(id)
      {
        if(confirm('Are you sure delete this data?'))
        {
          // ajax delete data from database
            $.ajax({
              url : "<?php echo base_url('admin/delete_kategori/')?>/"+id,
              type: "POST",
              dataType: "JSON",
              success: function(data)
              {

                 location.reload();
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error deleting data');
              }
          });

        }
      }
</script>
