<script type="text/javascript">
      function delete_kategori(id)
      {
        if(confirm('Are you sure delete this data?'))
        {
          // ajax delete data from database
            $.ajax({
              url : "<?php echo base_url('admin/kategori_update/')?>/"+id,
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

<div class="container-fluid admin-content">
  <div class="row">
    <div class="col-xs-10">
      <h1><i class="fa fa-fw fa-gear"></i> Kategori</h1>
    </div>
    <div class="col-xs-2" style="padding-top:3%;">
      <button class="btn btn-primary" id="cobab" data-target="#ModalAdd" data-toggle="modal" type="button"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
    </div>
  </div>
  <hr />
  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>No.</th>
      <th>Id_Kategori</th>
      <th>Kategori</th>
      <th style="width:20%;">Tindakan</th>
    </tr>
    <?php
    $i = 1;
      foreach ($kategori as $data) {
    ?>
    <tr>
      <td><?php echo $i; $i++; ?></td>
      <td><?php echo $data->id_kategori?></td>
      <td><?php echo $data->kategori?></td>
      <td><button class="btn btn-success"  type="button" onclick="edit_kategori(<?php echo $data->id_kategori;?>)"><i class="fa fa-fw fa-pencil-square"></i> Edit</button><button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button" onclick="delete_kategori(<?php echo $data->id_kategori;?>)"><i class="fa fa-fw fa-trash-o"></i> Delete</button></td>
    </tr>
    <?php    } ?>
  </table>
  <nav aria-label="Page navigation" class="text-right">
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

<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAddLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalAddLabel"><i class="fa fa-fw fa-plus-circle"></i>Tambah Data Baru</h4>
      </div>
      <form id="addKateg" action="" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <span>Kategori :</span>
          <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" class="btn btn-primary" id="tblData">Tambahkan Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEd" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="edKateg">
          <div class="form-group">
            <span>ID Kategori :</span>
            <input disabled type="text" name="idkatdummy" id="idkatdummy" class="form-control" placeholder="ID Kategori" value="" />
            <input type="hidden" name="idkat" id="idkat" value=""/>
          </div>
          <div class="form-group">
            <span>Kategori :</span>
            <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori" value=""/>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalDeleteLabels"><i class="fa fa-fw fa-trash-o"></i>Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" class="btn btn-primary">Hapus Data</button>
      </div>
    </div>
  </div>
</div>

