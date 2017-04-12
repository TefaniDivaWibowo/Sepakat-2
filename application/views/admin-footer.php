<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/summernote.min.js"); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url("assets/js/app.min.js"); ?>"></script>

<script type="text/javascript">

  $('#tblData').click(function(){
      $.ajax({
          'data'    : $('#addKateg').serialize(), //addKAteg iku id form
          'method'  : 'POST',
          'url'   : '<?= base_url('admin/tambah_kategori');?>', //conroller
          'success' : function(data){
              alert(data);
              $('#ModalAdd').modal('hide'); //modal e id ne
              location.reload();// for reload a page
          },
          'error' : function(err){
            console.log(err.ResponseText);
          }
      });

      return false;
  });

 
  function save()
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
              'data'    : $('#edBahan').serialize(),
              'method'  : 'POST',
              'url'     : '<?= base_url('admin/update_bahan/');?>',
              // dataType: "JSON",
              'success' : function(data){
                //if success close modal and reload ajax table
                $('#ModalEdit1').modal('hide');
                location.reload();// for reload a page
              },
              'error'   : function (err){
                  alert('Error adding / update data');
              }
          });
      }
function edit_manu(id){
    save_method = 'update';
    $('#edManu')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/manu_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="idmanu"]').val(data.id_manufaktur);
        $('[name="idmanuf"]').val(data.id_manufaktur);
        $('[name="nama"]').val(data.nama);
        $('[name="alamat"]').val(data.alamat);
        $('[name="no"]').val(data.no_telp);
        $('[name="email"]').val(data.email);
        $('[name="tipe"]').val(data.tipe);
        $('[name="butuh"]').val(data.barang_dibutuhkan);
        $('[name="banyak"]').val(data.banyak_kebutuhan);
        $('[name="provinsi"]').val(data.provinsi);
        $('[name="kota"]').val(data.kota);


        $('#ModalEdit2').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Manufaktur'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }
function savemanu()
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
              'data'    : $('#edManu').serialize(),
              'method'  : 'POST',
              'url'     : '<?= base_url('admin/update_manu/');?>',
              // dataType: "JSON",
              'success' : function(data){
                //if success close modal and reload ajax table
                $('#ModalEdit2').modal('hide');
                location.reload();// for reload a page
              },
              'error'   : function (err){
                  alert('Error adding / update data');
              }
          });
      }
function edit_bar(id){
    save_method = 'update';
    $('#edBar')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/barang_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="idbar"]').val(data.id_bb);
        $('[name="idbarf"]').val(data.id_bb);
        $('[name="nama"]').val(data.nama_bb);
        $('[name="kategori"]').val(data.id_kategori);

        $('#ModalEdit3').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Barang'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }
  function savebar()
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
              'data'    : $('#edBar').serialize(),
              'method'  : 'POST',
              'url'     : '<?= base_url('admin/update_bar/');?>',
              // dataType: "JSON",
              'success' : function(data){
                //if success close modal and reload ajax table
                $('#ModalEdit3').modal('hide');
                location.reload();// for reload a page
              },
              'error'   : function (err){
                  alert('Error adding / update data');
              }
          });
      }
      function edit_kot(id){
    save_method = 'update';
    $('#edKot')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/kota_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="idkot"]').val(data.id_kota);
        $('[name="idkotf"]').val(data.id_kota);
        $('[name="nama"]').val(data.kota);
        $('[name="prov"]').val(data.provinsi);

        $('#ModalEdit4').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Kategori'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }
  function savekot()
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
              'data'    : $('#edKot').serialize(),
              'method'  : 'POST',
              'url'     : '<?= base_url('admin/update_kot/');?>',
              // dataType: "JSON",
              'success' : function(data){
                //if success close modal and reload ajax table
                $('#ModalEdit4').modal('hide');
                location.reload();// for reload a page
              },
              'error'   : function (err){
                  alert('Error adding / update data');
              }
          });
      }
      function edit_provinsi(id){
    save_method = 'update';
    $('#edProv')[0].reset();

    $.ajax({
      url: "<?php echo base_url('admin/provinsi_edit/')?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="nama"]').val(data.provinsi);
        $('[name="namaf"]').val(data.provinsi);

        $('#ModalEdit').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Provinsi'); // Set title to Bootstrap modal title
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert("Error mengambil data Ajax");
      }
    })
  }
</script>
