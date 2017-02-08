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
</script>

<footer class="main-footer" style="border-top:1px solid #f0f0f0; padding:4px;">
  <div class="pull-right hidden-xs">
    <center><p class="footer-company-name">Sepakat &copy; 2017</p></center>
  </div>
</footer>
