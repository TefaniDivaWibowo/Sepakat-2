<div class="content-wrapper admin-content">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-10">
      <h1><i class="fa fa-fw fa-user"></i> Perusahaan Manufaktur</h1>
    </div>
    <div class="col-xs-2" style="padding-top:3%;">
      <button class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal" type="button"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
    </div>
  </div>
  <hr />
  <table class="table table-striped table-bordered table-hover">
        <tr>
            <td>No</td>
            <td>Nama Barang Bahan</td>
            <td>Kategori</td>
            <td width="15%" align="center">Tindakan</td>
        </tr>
      <?php
        $no = 0;
        foreach($barang_bahan as $u){
        $no++;
      ?>
        <tr>
        <input type="hidden" name="idbar" id="idbar" class="form-control" value="<?php echo $barang_bahan[$no-1]['id_bb']; ?>" />
            <td><?php echo $no; ?></td>
            <td><?php echo $barang_bahan[$no-1]['nama_bb']; ?></td>
            <td><?php echo $barang_bahan[$no-1]['kategori']; ?></td>
            <td><button align="center" class="btn btn-success" data-target="#ModalEdit" data-toggle="modal" type="button" onclick="edit_bar(<?php echo $u['id_bb'];?>)"><i class="fa fa-fw fa-pencil-square"></i> Edit</button><a href="del_bar/<?php echo $barang_bahan[$no-1]['id_bb']; ?>" onclick="return confirmDelete();"><button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button"><i class="fa fa-fw fa-trash-o"></i> Delete</button></a></td>
        </tr>
        <?php
        }
        ?>
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
</div>
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAddLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalAddLabel"><i class="fa fa-fw fa-plus-circle"></i>Tambah Data Baru</h4>
      </div>
      <form method="POST" action="<?php echo base_url(); ?>Admin/insert_barang">
      <div class="modal-body">
        <div class="form-group">
          <span>Nama Barang :</span>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Barang" />
        </div>
        <div class="form-group">
          <span>Kategori :</span>
          <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
     <input type="submit" name="submit" class="btn bg-red waves-effect" value="Tambah">
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEdit3" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalEditLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
      <form method="POST" action="" id="edBar">
      <div class="modal-body">
        <div class="form-group">
          <span>ID Barang :</span>
          <input disabled type="text" name="idbarf" id="idbarf" class="form-control" placeholder="ID User" value="2" />
          <input type="text" name="idbar">
        </div>
        <div class="form-group">
          <span>Nama Barang :</span>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Barang" />
        </div>
        <div class="form-group">
          <span>Kategori :</span>
          <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori" />
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" onclick="savebar()" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this data?');
    }
</script>
<!-- <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel">
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
</div> -->
