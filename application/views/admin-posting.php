<div class="content-wrapper admin-content">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-10">
      <h1><i class="fa fa-fw fa-user"></i> Postingan</h1>
    </div>
    <!-- <div class="col-xs-2" style="padding-top:3%;">
      <button class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal" type="button"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
    </div> -->
  </div>
  <hr />
  <table class="table table-striped table-bordered table-hover">
    <tr>
            <td>No</td>
            <td>ID User</td>
            <td>Nama Perusahann</td>
            <td>Isi</td>
            <td>Tanggal Upload</td>
            <td>Jam Upload</td>
            <td width="15%">Tindakan</td>
    </tr>
      <?php
        $no = 0;
        foreach($posting as $u){
        $no++;
      ?>
        <tr>
        <input type="hidden" name="idbahan" id="idbahan" class="form-control" value="<?php echo $posting[$no-1]['id_post']; ?>" />
            <td><?php echo $no; ?></td>
            <td><?php echo $posting[$no-1]['id_post']; ?></td>
            <td><?php echo 'hai';?></td>
            <td><?php echo $posting[$no-1]['isi']; ?></td>
            <td><?php echo $posting[$no-1]['tanggal']; ?></td>
            <td><?php echo $posting[$no-1]['waktu']; ?></td>
           
            <td><!-- <button align="center" class="btn btn-success" data-target="#ModalEdit1" data-toggle="modal" type="button" onclick="edit_bahan(<?php echo $u['id_post'];?>)"><i class="fa fa-fw fa-pencil-square"></i> Edit</button>  --><a href="del_bahan/<?php echo $posting[$no-1]['id_post'];?>" onclick="return confirmDelete();"><button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button"><i class="fa fa-fw fa-trash-o"></i> Delete</button></a></td>
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

<div class="modal fade" id="ModalEdit1" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalEditLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
      <form method="POST" action="" id="edBahan">
      <div class="modal-body">
       <div class="form-group">
           <span>ID :</span>
          <input disabled type="text" name="idbahanz" id="idbahanz" class="form-control" placeholder="ID Perusahaan" />
          <input type="hidden" name="idbahan" id="idbahan" value="">
        </div>
        <div class="form-group">
           <span>Nama :</span>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama perusahaan" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" />
        </div>
        <div class="form-group">
          <span>Nomor Telepon:</span>
          <input type="text" name="no" id="no" class="form-control" placeholder="nomor telepon" />
        </div>
        <div class="form-group">
          <span>Email :</span>
          <input type="text" name="email" id="email" class="form-control" placeholder="email" />
        </div>
        <div class="form-group">
          <span>Bukti :</span>
          <input type="text" name="bukti" id="bukti" class="form-control" placeholder="bukti" />
        </div>
        <div class="form-group">
          <span>Total Produksi :</span>
          <input type="text" name="total" id="total" class="form-control" placeholder="Total" />
        </div>
        <div class="form-group">
          <span>Kategori :</span>
          <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori" />
        </div>
        <div class="form-group">
          <span>Barang yang Dihasikan :</span>
          <input type="text" name="hasil" id="hasil" class="form-control" placeholder="hasil" />
        </div>
        <div class="form-group">
          <span>Provinsi :</span>
          <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="provinsi" />
        </div>
        <div class="form-group">
          <span>Kota :</span>
          <input type="text" name="kota" id="kota" class="form-control" placeholder="kota" />
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" onclick="savebahan()" class="btn btn-primary">Simpan Perubahan</button>
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
<script type="text/javascript">
  function combokota() 
  {
    var combo_provinsi = $('#provinsi').val();
    console.log(combo_provinsi);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Admin/getComboKota/') ?>"+combo_provinsi,
      data : '',
      success: function(data){
        $('#kota').find('option').remove();
        $('#kota').append(data);
      }
    });
  }
</script>